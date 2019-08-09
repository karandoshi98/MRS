name = document.getElementById('textBox').value;
img = document.getElementById('image');
movie = document.getElementById('movie');

function search()
  {
    $.ajax({
                    type: "POST",
                    url: 'search_name.php',
                    data: {name: name},
                    success: function(data)
                    {
                        if(data==1)
                        {
                            movie.style.display= 'none';
                            alert("Sorry, No movie found");
                            $('#textBox').val("");
                        }
                        else
                        {
                            alert(data);
                            $('img').attr('src', data);
                            $('#name').html(name);
                            $('#textBox').val("");
                            movie.style.display= 'block';
                        }
                    },
                    error: function() {
                      // body...
                      alert("ERROR");
                    }
                });
  }