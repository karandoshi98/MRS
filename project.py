#!flask/bin/python


import json
import mysql.connector
import csv
import numpy as np
import sys
import time
import math
import re
import pickle
from sklearn.cluster import KMeans
from sklearn.metrics import mean_squared_error
import pandas as pd

conn = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="mrs"
)

cursor = conn.cursor()
cursor.execute("SELECT r.UID,r.movie_id,m.rating,m.movie_id,m.genre_link FROM ratings r,movie m where r.movie_id=m.movie_id")
#with open("out.csv", "w", newline='') as csv_file:  # Python 3 version    
with open("out.csv", "w") as csv_file:              # Python 2 version
    csv_writer = csv.writer(csv_file)
    csv_writer.writerow([i[0] for i in cursor.description])
    csv_writer.writerows(cursor)

file= open("out.csv","r")
i=file.read()


db = pd.read_csv("out.csv")

db.dropna(how="any", inplace=True)
copy1 = db.copy()
copy1.drop(['rating'],axis=1,inplace=True)
reshaped = (copy1.set_index(copy1.columns.drop('genre_link',1).tolist()).genre_link.str.split('/', expand=True).stack().reset_index().rename(columns={0:'genre_link'}).loc[:, copy1.columns])
res=pd.get_dummies(reshaped, columns=["genre_link"])
res1=res.groupby(res['movie_id']).sum()
for i in range(len(res1.columns)):
    p=0
    for x in res1.iloc[p:,i]:
        if x<1 and x>0:
            res1.iloc[p,i]==1
        else:
            res1.iloc[p,i]==0
        p+=1
users1 = np.array(db.iloc[:, [0]].values)
users1=users1.transpose()
items=np.array(db['movie_id' ])
for i in range(len(items)):
    items[i]=int(items[i])
users=[]
for i in range(0,len(users1[0])):
    users.append(int(users1[0][i]))
users=np.array(users)
usr=max(users)
ratings=np.array(db['rating'])
mov=max(items)
utility = np.zeros((usr,mov), dtype = float)
n_utility = len(utility)
for r in range(0,len(ratings)-1):
    utility[users[r]-1][items[r]-1] = ratings[r]
cluster = KMeans(n_clusters=9)
cluster.fit_predict(res1)
utility_clustered = []
for i in range(0, usr):
    average = np.zeros(10)
    tmp = []
    for m in range(0, 10):
        tmp.append([])
    for j in range(0, mov):
        if j>=14:
            break
        if utility[i][j] != 0:
            tmp[cluster.labels_[j] - 1].append(utility[i][j])
    for m in range(0, 10):
        if len(tmp[m]) != 0:
            average[m] = np.mean(tmp[m])
        else:
            average[m] = 0
    utility_clustered.append(average)
user_avg= np.zeros(usr)
for i in range(0, usr):
    x = utility_clustered[i]
    # print(i)
    print(utility_clustered[i])
    user_avg[i] = sum(a for a in x if a > 0) / sum(a > 0 for a in x)
def pcs(x, y, ut=utility_clustered):
    num = 0
    den1 = 0
    den2 = 0
    A = ut[x - 1]
    B = ut[y - 1]
    num = sum((a - user_avg[x - 1]) * (b - user_avg[y - 1]) for a, b in zip(A, B) if a > 0 and b > 0)
    den1 = sum((a - user_avg[x - 1]) ** 2 for a in A if a > 0)
    den2 = sum((b - user_avg[y - 1]) ** 2 for b in B if b > 0)
    den = (den1 ** 0.5) * (den2 ** 0.5)
    if den == 0:
        return 0
    else:
        return num / den

pcs_matrix = np.zeros((usr,usr))
for i in range(0, usr):
    for j in range(0, usr):
        if i!=j:
            pcs_matrix[i][j] = pcs(i + 1, j + 1)
            sys.stdout.write("\rGenerating Similarity Matrix [%d:%d] = %f" % (i+1, j+1, pcs_matrix[i][j]))
            sys.stdout.flush()
            time.sleep(0.00005)
# print("\rGenerating Similarity Matrix [%d:%d] = %f" % (i+1, j+1, pcs_matrix[i][j]))

# print(pcs_matrix)
def norm():
    normalize = np.zeros((usr, 10))
    for i in range(0, usr):
        for j in range(0, 10):
            if utility_clustered[i][j] != 0:
                normalize[i][j] = utility_clustered[i][j] - user_avg[i]
            else:
                normalize[i][j] = float('Inf')
    return normalize

def guess(user_id, i_id, top_n):
    similarity = []
    for i in range(0, usr):
        if i+1 != user_id:
            similarity.append(pcs_matrix[user_id-1][i])
    temp = norm()
    temp = np.delete(temp, user_id-1, 0)
    top = [x for (y,x) in sorted(zip(similarity,temp), key=lambda pair: pair[0], reverse=True)]
    s = 0
    c = 0
    for i in range(0, top_n):
        if top[i][i_id-1] != float('Inf'):
            s += top[i][i_id-1]
            c += 1
    g = user_avg[user_id-1] if c == 0 else s/float(c) + user_avg[user_id-1]
    if g < 1.0:
        return 1.0
    elif g > 5.0:
        return 5.0
    else:
        return g


utility_copy = np.copy(utility_clustered)
for i in range(0, usr):
    for j in range(0, 10):
        if utility_copy[i][j] == 0:
            sys.stdout.write("\rGuessing [User:Rating] = [%d:%d]" % (i, j))
            sys.stdout.flush()
            time.sleep(0.00005)
            utility_copy[i][j] = guess(i+1, j+1, 5)
# print ("\rGuessing [User:Rating] = [%d:%d]" % (i, j))

# print (utility_copy)


ask = 10
new_user = np.zeros(10)

for movie in range(0,ask):
        a = np.random.randint(low=1,high=6)
        if new_user[cluster.labels_[movie - 1]] != 0:
                new_user[cluster.labels_[movie - 1]] = (new_user[cluster.labels_[movie - 1]] + a) / 2
        else:
                new_user[cluster.labels_[movie - 1]] = a

utility_new = np.vstack((utility_copy, new_user))


pcs_matrix = np.zeros(usr+1)

# print ("Finding users which have similar preferences.")
for i in range(usr):
    if i != usr:
        pcs_matrix[i] = pcs(usr, i + 1, utility_new)

user_index = []
for i in range(usr+1):
        user_index.append(i - 1)
user_index = user_index[:len(users)]
user_index = np.array(user_index)

top_5 = [x for (y,x) in sorted(zip(pcs_matrix, user_index), key=lambda pair: pair[0], reverse=True)]
top_5 = top_5[:5]

top_5_genre = []

for i in range(0, 5):
        maxi = 0
        maxe = 0
        for j in range(0, 10):
                if maxe < utility_copy[top_5[i]][j]:
                        maxe = utility_copy[top_5[i]][j]
                        maxi = j
        top_5_genre.append(maxi)

# print ("Movie genres you'd like:")
top_5_genre2 = []
for i in top_5_genre:
        if i == 0:
                # print ("unknown")
                top_5_genre2.append("unknown")
        elif i == 1:
                # print ("action")
                top_5_genre2.append("action")
        elif i == 2:
                # print ("adventure")
                top_5_genre2.append("adventure")
        elif i == 3:
                # print ("animation")
                top_5_genre2.append("animations")
        elif i == 4:
                # print ("childrens")
                top_5_genre2.append("childrens")
        elif i == 5:
                # print ("comedy")
                top_5_genre2.append("comedy")
        elif i == 6:
                # print ("crime")
                top_5_genre2.append("crime")
        elif i == 7:
                # print ("documentary")
                top_5_genre2.append("documentary")
        elif i == 8:
                # print ("drama")
                top_5_genre2.append("drama")
        elif i == 9:
                # print ("fantasy")
                top_5_genre2.append("fantasy")
        elif i == 10:
                # print ("film_noir")
                top_5_genre2.append("film_noir")
        elif i == 11:
                # print ("horror")
                top_5_genre2.append("horror")
        elif i == 12:
                # print ("musical")
                top_5_genre2.append("musical")
        elif i == 13:
                # print ("mystery")
                top_5_genre2.append("mystery")
        elif i == 14:
                # print ("romance")
                top_5_genre2.append("romance")
        elif i == 15:
                # print ("science fiction")
                top_5_genre2.append("science fiction")
        elif i == 16:
                # print ("thriller")
                top_5_genre2.append("thriller")
        elif i == 17:
                # print ("war")
                top_5_genre2.append("war")
        else:
                # print ("western")
                top_5_genre2.append("western")


print(top_5_genre2)

from flask import Flask, jsonify, request

app = Flask(__name__)
   
@app.route('/todo/api/v1.0/tasks', methods=['GET'])
def get_tasks():
    return json.dumps(top_5_genre2)

if __name__ == '__main__':
    app.run(debug=True)


    # return top_5_genre2
# import_csv_read()