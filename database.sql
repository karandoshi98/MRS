-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 06:41 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `movie1_name` varchar(50) NOT NULL,
  `movie1_link` varchar(100) NOT NULL,
  `movie2_name` varchar(50) NOT NULL,
  `movie2_link` varchar(100) NOT NULL,
  `movie3_name` varchar(50) NOT NULL,
  `movie3_link` varchar(100) NOT NULL,
  `movie4_name` varchar(50) NOT NULL,
  `movie4_link` varchar(100) NOT NULL,
  `movie5_name` varchar(50) NOT NULL,
  `movie5_link` varchar(100) NOT NULL,
  `actor_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `movie1_name` varchar(50) NOT NULL,
  `movie1_link` varchar(500) NOT NULL,
  `movie2_name` varchar(50) NOT NULL,
  `movie2_link` varchar(500) NOT NULL,
  `movie3_name` varchar(50) NOT NULL,
  `movie3_link` varchar(500) NOT NULL,
  `movie4_name` varchar(50) NOT NULL,
  `movie4_link` varchar(500) NOT NULL,
  `movie5_name` varchar(50) NOT NULL,
  `movie5_link` varchar(500) NOT NULL,
  `d_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`movie1_name`, `movie1_link`, `movie2_name`, `movie2_link`, `movie3_name`, `movie3_link`, `movie4_name`, `movie4_link`, `movie5_name`, `movie5_link`, `d_name`) VALUES
('Tiger zinda hai', 'https://upload.wikimedia.org/wikipedia/en/2/22/Tiger_Zinda_Hai_poster.jpg', 'sultan', 'https://upload.wikimedia.org/wikipedia/en/1/1f/Sultan_film_poster.jpg', 'gunday', 'https://upload.wikimedia.org/wikipedia/en/4/46/Gunday_%282013_film%29.jpg', 'mere brother ki dulhan', 'https://upload.wikimedia.org/wikipedia/en/8/83/Mere_Brother_Ki_Dulhan22.jpg', 'badmaash company', 'https://upload.wikimedia.org/wikipedia/en/0/00/Badmash-Companywall.jpg', 'Ali Abbas zafar'),
('Side by Side ', 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Side_by_side_2012.jpg', 'Avatar', 'https://upload.wikimedia.org/wikipedia/en/b/b0/Avatar-Teaser-Poster.jpg', 'Ghosts of the Abyss', 'https://upload.wikimedia.org/wikipedia/en/5/5e/Ghosts_of_the_abyss.jpg', 'Titanic', 'https://upload.wikimedia.org/wikipedia/en/2/22/Titanic_poster.jpg', 'True Lies', 'https://upload.wikimedia.org/wikipedia/en/8/81/True_Lies_poster.png', 'James Cameron'),
('Bareilly Ki Barfi', 'https://upload.wikimedia.org/wikipedia/en/9/97/Bareilly_Ki_Barfi_Poster.jpg', 'dangal', 'http://t3.gstatic.com/images?q=tbn:ANd9GcQIXnFlBKGWT1ByyIu3qfxX6opQX6BmeeU_qsiE3X8rX9ZRr63r', ' Kill Dil', 'https://upload.wikimedia.org/wikipedia/en/thumb/e/e6/Kill_Dil.jpg/220px-Kill_Dil.jpg', 'Bhoothnath Returns', 'http://www.gstatic.com/tv/thumb/v22vodart/10679108/p10679108_v_v8_ab.jpg', 'Chillar Party', 'https://upload.wikimedia.org/wikipedia/en/4/4d/Chillarparty2.jpg', 'Nitesh Tiwari'),
('Doctor Strange', 'https://upload.wikimedia.org/wikipedia/en/c/c7/Doctor_Strange_poster.jpg', 'Sinister 2', 'https://upload.wikimedia.org/wikipedia/en/9/99/Sinister2Poster.jpg', 'Kristy', 'https://upload.wikimedia.org/wikipedia/en/c/c0/Kristy_2014_poster.png', 'Misunderstood ', 'https://upload.wikimedia.org/wikipedia/en/f/f8/Misunderstood_%282014_film%29.jpg', ' Deliver Us from Evil', 'https://upload.wikimedia.org/wikipedia/en/b/b4/Deliver_Us_from_Evil_%282014_film%29_poster.jpg', 'Scott Derrickson'),
('The kissing booth', 'https://upload.wikimedia.org/wikipedia/en/3/3b/The_Kissing_Booth.png', 'zombie prom', 'https://m.media-amazon.com/images/M/MV5BYzQ3OTliNzItNmQ4MC00MWRjLWFmMGEtODMyZTM0NTc1NjMxXkEyXkFqcGdeQXVyNjcwNDU1NDM@._V1_UY268_CR4,0,182,268_AL__QL50.jpg', 'Saige Paints the Sky', 'http://www.gstatic.com/tv/thumb/v22vodart/10011974/p10011974_v_v8_ad.jpg', 'liar liar vampire', 'http://www.gstatic.com/tv/thumb/v22vodart/12080429/p12080429_v_v8_aa.jpg', 'Isabelle Dances Into the Spotlight', 'https://m.media-amazon.com/images/M/MV5BMTgwNzk5MDg3M15BMl5BanBnXkFtZTgwOTIzMDkxMjE@._V1_UY268_CR9,0,182,268_AL__QL50.jpg', 'Vince Marcello');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(500) NOT NULL,
  `movie_link` varchar(100) NOT NULL,
  `actor1_name` varchar(50) NOT NULL,
  `actor1_link` varchar(500) NOT NULL,
  `actor2_name` varchar(50) NOT NULL,
  `actor2_link` varchar(500) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_link` varchar(500) NOT NULL,
  `genre` varchar(1000) NOT NULL,
  `genre_link` varchar(50) NOT NULL,
  `g_main` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_link`, `actor1_name`, `actor1_link`, `actor2_name`, `actor2_link`, `d_name`, `d_link`, `genre`, `genre_link`, `g_main`, `type`, `rating`) VALUES
(1, 'Doctor Strange', 'http://t3.gstatic.com/images?q=tbn:ANd9GcSmG4ms8wxdnuKOwetpc4qltTv7pHopDLRTi-t98dx-L-kt_b1t', 'Benedict Cumberbatch', 'http://www.gstatic.com/tv/thumb/persons/275459/275459_v9_bb.jpg', 'Rachel McAdams', 'http://www.gstatic.com/tv/thumb/persons/273505/273505_v9_bb.jpg', 'Scott Derrickson', 'http://www.gstatic.com/tv/thumb/persons/193901/193901_v9_bb.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'fantasy/fiction', 'fiction', 0, 3),
(2, 'The Kissing Booth', 'http://www.gstatic.com/tv/thumb/movieposters/15418836/p15418836_p_v8_aa.jpg', 'Joey King', 'http://www.gstatic.com/tv/thumb/persons/494620/494620_v9_ba.jpg', 'Jacob Elordi', 'http://www.gstatic.com/tv/thumb/persons/1148978/1148978_v9_ba.jpg', 'Vince Marcello', 'http://br.web.img3.acsta.net/c_215_290/pictures/14/09/11/19/54/512033.jpg', 'http://www.filmsite.org/images/romance-genre.jpg', 'romance/comedy', 'romance', 0, 5),
(3, 'Inception', 'http://t2.gstatic.com/images?q=tbn:ANd9GcRo9vfJCM6dzPkZHIHBVCtlJnAnew9Ai26kEdrli0-tfmatmciD', 'Leonardo DiCaprio', 'http://www.gstatic.com/tv/thumb/persons/435/435_v9_bb.jpg', 'Ellen Page', 'http://www.gstatic.com/tv/thumb/persons/261958/261958_v9_ba.jpg', 'Christopher Nolan', 'http://www.gstatic.com/tv/thumb/persons/233377/233377_v9_bb.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'fiction/thriller', 'thriller', 0, 4.8),
(4, 'Dangal', 'http://t3.gstatic.com/images?q=tbn:ANd9GcQIXnFlBKGWT1ByyIu3qfxX6opQX6BmeeU_qsiE3X8rX9ZRr63r', 'Aamir Khan', 'http://www.gstatic.com/tv/thumb/persons/170518/170518_v9_ba.jpg', 'Fatima Sana Shaikh', 'http://ste.india.com/sites/default/files/2017/03/13/578168-fatimasanainsta.jpg', 'Nitesh Tiwari', 'https://resize.indiatvnews.com/en/centered/oldbucket/715_431/entertainmentbollywood/nitesh-tiwari.jpg', 'http://www.filmsite.org/featured/sports-films-H.jpg', 'drama/sport', 'sport', 0, 4.2),
(5, 'The Wolf of Wallstreet', 'http://t1.gstatic.com/images?q=tbn:ANd9GcTm52BWbxXmwOpfz5rmx0BNBj79kSQoGpYPq4TVt07Jel5En6aC', 'Leonardo DiCaprio', 'http://www.gstatic.com/tv/thumb/persons/435/435_v9_bb.jpg', 'Margot Robbie', 'http://www.gstatic.com/tv/thumb/persons/579067/579067_v9_ba.jpg', 'Martin Scorsese', 'http://www.gstatic.com/tv/thumb/persons/1574/1574_v9_bb.jpg', 'http://www.filmsite.org/images/comedy-genre.jpg', 'drama/comedy', 'comedy', 0, 3.8),
(6, 'Titanic', 'http://t0.gstatic.com/images?q=tbn:ANd9GcQhYjUIu2o5v5u3rfJpCq5Cz0Q9WK--XdYxai_N2d0ImohPiIOp', 'Leonardo DiCaprio', 'http://www.gstatic.com/tv/thumb/persons/435/435_v9_bb.jpg', 'Kate Winslet', 'http://www.gstatic.com/tv/thumb/persons/70811/70811_v9_ba.jpg', 'James Cameron', 'http://www.gstatic.com/tv/thumb/persons/263/263_v9_bb.jpg', 'http://www.filmsite.org/images/disaster-genre.jpg', 'drama/disaster', 'drama', 0, 4.3),
(7, 'Sultan', 'http://www.gstatic.com/tv/thumb/v22vodart/12946117/p12946117_v_v8_aa.jpg', 'Salman Khan', 'https://cdn.dnaindia.com/sites/default/files/styles/full/public/2018/04/05/668697-599083-salman-khan-080717.jpg', 'Anushka Sharma', 'https://in.bmscdn.com/iedb/artist/images/website/poster/large/anushka-sharma-7978-05-09-2016-10-57-46.jpg', 'Ali Abbas Zafar', 'https://m.media-amazon.com/images/M/MV5BMjA1MDg5Nzg5MV5BMl5BanBnXkFtZTgwODE0NTE0NDM@._V1_.jpg', 'http://www.filmsite.org/featured/sports-films-H.jpg', 'drama/sport', 'sport', 0, 2.3),
(8, 'Rustom', 'http://t3.gstatic.com/images?q=tbn:ANd9GcT4H2JWKIA8a2_gGVSStPrGQNwGCJHbkbsx_q7Ue1cXN1k1wvC7', 'Akshay Kumar', 'http://www.gstatic.com/tv/thumb/persons/90028/90028_v9_ba.jpg', 'Ileana D\'Cruz', 'http://www.gstatic.com/tv/thumb/persons/501995/501995_v9_ba.jpg', 'Tinu Suresh Desai', 'https://s3.ap-southeast-1.amazonaws.com/images.deccanchronicle.com/dc-Cover-3dbi7bndv982rni2aoi10t0qr1-20161206163437.Medi.jpeg', 'https://d1zqayhc1yz6oo.cloudfront.net/8b36764bdf18952950536d4333b36a9c.jpg', 'drama/mystery', 'mystery', 0, 3.4),
(9, 'Thor', 'https://images-na.ssl-images-amazon.com/images/I/91P1wWqX63L._SL1500_.jpg', 'Chris Hemsworth', 'http://www.gstatic.com/tv/thumb/persons/528854/528854_v9_ba.jpg', 'Natalie Portman', 'http://www.gstatic.com/tv/thumb/persons/71364/71364_v9_ba.jpg', ' Kenneth Branagh', 'http://www.gstatic.com/tv/thumb/persons/194/194_v9_bb.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'fantasy/fiction', 'fiction', 0, 4.3),
(10, 'Iron man 2', 'http://www.gstatic.com/tv/thumb/v22vodart/3546118/p3546118_v_v8_af.jpg', 'Robert Downey Jr.', 'http://www.gstatic.com/tv/thumb/persons/67369/67369_v9_bb.jpg', 'Scarlett Johansson', 'http://www.gstatic.com/tv/thumb/persons/69369/69369_v9_bb.jpg', 'Jon Favreau', 'http://www.gstatic.com/tv/thumb/persons/71093/71093_v9_ba.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'fiction/action', 'action', 0, 5),
(11, '3 idiots', 'http://www.gstatic.com/tv/thumb/v22vodart/7951929/p7951929_v_v8_ab.jpg', 'Aamir Khan', 'http://www.gstatic.com/tv/thumb/persons/170518/170518_v9_ba.jpg', 'Kareena Kapoor', 'http://www.gstatic.com/tv/thumb/persons/247102/247102_v9_ba.jpg', 'Rajkumar Hirani', 'http://www.gstatic.com/tv/thumb/persons/303303/303303_v9_ba.jpg', 'http://www.filmsite.org/featured/sports-films-H.jpg', 'drama/sport', 'sport', 0, 3),
(12, 'Airlift', 'http://www.gstatic.com/tv/thumb/v22vodart/12510129/p12510129_v_v8_aa.jpg', 'Akshay Kumar', 'http://www.gstatic.com/tv/thumb/persons/90028/90028_v9_ba.jpg', 'Nimrat Kaur', 'http://www.gstatic.com/tv/thumb/persons/737628/737628_v9_ba.jpg', 'Raja Krishna Menon', 'https://i2.cinestaan.com/image-bank/1500-1500/64001-65000/64136.jpg', 'http://2.bp.blogspot.com/_oWQcH8AVe50/TTYfYVE2lII/AAAAAAAAAlw/5d-35wCWyfg/s1600/Picture1.png', 'action/thriller', 'action', 0, 2),
(13, 'Bhoothnath', 'http://www.gstatic.com/tv/thumb/v22vodart/180175/p180175_v_v8_aa.jpg', 'Amitabh Bachchan', 'http://www.gstatic.com/tv/thumb/persons/4153/4153_v9_bc.jpg', 'Juhi Chawla', 'http://www.gstatic.com/tv/thumb/persons/170120/170120_v9_ba.jpg', 'Vivek Sharma', 'https://images.firstpost.com/wp-content/uploads/2015/11/vivek-sharma-afp-380.jpg', 'http://www.filmsite.org/images/comedy-genre.jpg', 'fantasy/comedy', 'comedy', 1, 3.9),
(14, 'Avengers: Infinity War', 'http://www.gstatic.com/tv/thumb/v22vodart/12863030/p12863030_v_v8_ae.jpg', 'Robert Downey Jr.', 'http://www.gstatic.com/tv/thumb/persons/67369/67369_v9_bb.jpg', 'scarlet johansson', 'http://www.gstatic.com/tv/thumb/persons/69369/69369_v9_bb.jpg', 'Anthony Russo', 'http://www.gstatic.com/tv/thumb/persons/303030/303030_v9_bb.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'fantasy/science fiction', 'fiction', 1, 4.8),
(15, 'Black Panther', 'http://www.gstatic.com/tv/thumb/v22vodart/12878741/p12878741_v_v8_ac.jpg', 'Chadwick Boseman', 'http://www.gstatic.com/tv/thumb/persons/492157/492157_v9_bb.jpg', 'Lupita Nyong\'o', 'Lupita Nyong\'o', 'Ryan Coogler', 'http://www.gstatic.com/tv/thumb/persons/698457/698457_v9_ba.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'fantasy/science fiction', 'fiction', 1, 3.9),
(16, 'Incredibles 2', 'http://www.gstatic.com/tv/thumb/v22vodart/13446354/p13446354_v_v8_ag.jpg', 'Craig T. Nelson', 'http://www.gstatic.com/tv/thumb/persons/69526/69526_v9_bb.jpg', 'Holly Hunter', 'http://www.gstatic.com/tv/thumb/persons/26796/26796_v9_ba.jpg', 'Brad Bird', 'http://www.gstatic.com/tv/thumb/persons/167198/167198_v9_bb.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'science fiction/action', 'action', 1, 4.5),
(17, 'Mission: Impossible: Fallout', 'http://www.gstatic.com/tv/thumb/v22vodart/13492451/p13492451_v_v8_aa.jpg', 'Tom Cruise', 'http://www.gstatic.com/tv/thumb/persons/378/378_v9_bd.jpg', 'Rebecca Ferguson', 'http://www.gstatic.com/tv/thumb/persons/723292/723292_v9_bb.jpg', 'Christopher McQuarrie', 'http://www.gstatic.com/tv/thumb/persons/207636/207636_v9_bb.jpg', 'https://image.slidesharecdn.com/actionthrillergenre-110304150331-phpapp01/95/action-thriller-genre-1-728.jpg?cb=1299251070', 'thriller/action', 'thriller', 1, 4.6),
(18, 'Deadpool 2', 'http://www.gstatic.com/tv/thumb/v22vodart/12854824/p12854824_v_v8_bb.jpg', 'Ryan Reynolds', 'http://www.gstatic.com/tv/thumb/persons/57282/57282_v9_bb.jpg', 'Zazie Beetz', 'http://www.gstatic.com/tv/thumb/persons/981946/981946_v9_ba.jpg', 'David Leitch', 'http://www.gstatic.com/tv/thumb/persons/221570/221570_v9_bb.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'fantasy/science fiction', 'fiction', 1, 4),
(19, 'Venom', 'http://www.gstatic.com/tv/thumb/v22vodart/13937884/p13937884_v_v8_aa.jpg', 'Tom Hardy', 'http://www.gstatic.com/tv/thumb/persons/269411/269411_v9_bc.jpg', 'Michelle Williams', 'http://www.gstatic.com/tv/thumb/persons/79233/79233_v9_bb.jpg', 'Ruben Fleischer', 'http://www.gstatic.com/tv/thumb/persons/545066/545066_v9_bb.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'thriller/science fiction', 'fiction', 1, 4.6),
(20, 'Crazy Rich Asians', 'https://pbs.twimg.com/media/DbawL1rWAAAOZq8.jpg:large', 'Pierre Png', 'Pierre Png', 'Constance Wu', 'http://www.gstatic.com/tv/thumb/persons/496539/496539_v9_bb.jpg', 'Jon M. Chu ', 'http://www.gstatic.com/tv/thumb/persons/509044/509044_v9_bb.jpg', 'http://www.filmsite.org/images/comedy-genre.jpg', 'drama/comedy', 'comedy', 1, 3.4),
(21, 'Overboard', 'http://www.gstatic.com/tv/thumb/v22vodart/14721978/p14721978_v_v8_ab.jpg', 'Eugenio Derbez', 'http://www.gstatic.com/tv/thumb/persons/154314/154314_v9_bb.jpg', 'Anna Faris', 'http://www.gstatic.com/tv/thumb/persons/198450/198450_v9_bb.jpg', 'Rob Greenberg', 'https://vignette.wikia.nocookie.net/howimetyourdad/images/8/8b/Rob.jpg/revision/latest?cb=20140406034057', 'http://www.filmsite.org/images/comedy-genre.jpg', 'drama/comedy', 'comedy', 1, 3.7),
(22, 'Padmaavat', 'http://t0.gstatic.com/images?q=tbn:ANd9GcREhV2NVzC0OhjtRD-K0GMLFwvaIBXBb8Hu7_dPrUiZy1jD-jRE', 'Ranveer Singh', 'https://cdn.pinkvilla.com/files/styles/contentpreview/public/RanveerSingh-GQ-event-pics%20%286%29.jpg?itok=QKn1s1Sw', 'Deepika Padukone', 'http://www.gstatic.com/tv/thumb/persons/509523/509523_v9_bc.jpg', 'Sanjay Leela Bhansali', 'http://www.gstatic.com/tv/thumb/persons/237142/237142_v9_ba.jpg', 'https://vignette.wikia.nocookie.net/tditii/images/f/f4/Tdatiilogo.png/revision/latest?cb=20110106003552', 'drama/action', 'action', 1, 4.3),
(23, 'Sanju', 'http://t2.gstatic.com/images?q=tbn:ANd9GcSXZqN6IpcaGlj81n0pybq5mEjPymDiULSoJxJLTOR-qSqdvQr1', 'Ranbir Kapoor', 'http://www.gstatic.com/tv/thumb/persons/509114/509114_v9_ba.jpg', 'Anushka Sharma', 'http://www.gstatic.com/tv/thumb/persons/532643/532643_v9_ba.jpg', 'Rajkumar Hirani', 'http://www.gstatic.com/tv/thumb/persons/303303/303303_v9_ba.jpg', 'http://www.filmsite.org/images/drama-genre.jpg', 'drama', 'drama', 1, 4.2),
(24, 'Raazi', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRHhtivVieLWw8QpVdWF2sVk9HUSEBDUgk0q7lkowPUWxsTQy9z', 'Vicky Kaushal', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFjQH26_EnuwX1LSQE1Y-9qzh7GrQDtqUt_IIi15rAMgLcxqqLfY-5XPs', 'Alia Bhatt', 'http://www.gstatic.com/tv/thumb/persons/685932/685932_v9_ba.jpg', 'Meghna Gulzar', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Meghna_gulzar.jpg/220px-Meghna_gulzar.jpg', 'http://2.bp.blogspot.com/_oWQcH8AVe50/TTYfYVE2lII/AAAAAAAAAlw/5d-35wCWyfg/s1600/Picture1.png', 'drama/thriller', 'thriller', 1, 4.6),
(25, 'The Martian', 'http://www.gstatic.com/tv/thumb/v22vodart/10980706/p10980706_v_v8_ab.jpg', 'Matt Damon', 'http://www.gstatic.com/tv/thumb/persons/44333/44333_v9_ba.jpg', 'Jessica Chastain', 'http://www.gstatic.com/tv/thumb/persons/492119/492119_v9_bb.jpg', 'Ridley Scott', 'http://www.gstatic.com/tv/thumb/persons/1575/1575_v9_ba.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'Drama/Science Fiction', 'Fiction', 1, 4.2),
(26, 'Ready Player One', 'http://www.gstatic.com/tv/thumb/v22vodart/12806300/p12806300_v_v8_ac.jpg', 'Tye Sheridan', 'http://www.gstatic.com/tv/thumb/persons/624958/624958_v9_bb.jpg', 'Olivia Cooke', 'http://www.gstatic.com/tv/thumb/persons/696404/696404_v9_bb.jpg', 'Steven Spielberg', 'http://www.gstatic.com/tv/thumb/persons/1672/1672_v9_ba.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'Thriller/Science Fiction ', 'Fiction ', 1, 4.1),
(27, 'War for the Planet of the Apes', 'http://www.gstatic.com/tv/thumb/v22vodart/12126545/p12126545_v_v8_ab.jpg', 'Andy Serkis', 'http://www.gstatic.com/tv/thumb/persons/85991/85991_v9_bb.jpg', 'Keri Russell', 'http://www.gstatic.com/tv/thumb/persons/36765/36765_v9_ba.jpg', 'Matt Reeves', 'http://www.gstatic.com/tv/thumb/persons/221334/221334_v9_bb.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'Science Fiction/Thriller', 'Fiction', 1, 3.9),
(28, 'Rise of the Planet of the Apes', 'http://www.gstatic.com/tv/thumb/v22vodart/8338079/p8338079_v_v8_aw.jpg', 'Andy Serkis', 'http://www.gstatic.com/tv/thumb/persons/85991/85991_v9_bb.jpg', 'Freida Pinto', 'http://www.gstatic.com/tv/thumb/persons/525658/525658_v9_ba.jpg', 'Rupert Wyatt', 'http://www.gstatic.com/tv/thumb/persons/519748/519748_v9_ba.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKfrsZ10DVAJdniqhfRoDX9zbJn5wr3XoovCgH7Ives6lQ0Yw', 'Drama/Science Fiction', 'Fiction', 0, 4.2),
(29, 'V for Vendetta', 'http://www.gstatic.com/tv/thumb/v22vodart/159693/p159693_v_v8_av.jpg', 'Hugo Weaving', 'http://www.gstatic.com/tv/thumb/persons/27163/27163_v9_ba.jpg', 'Natalie Portman', 'http://www.gstatic.com/tv/thumb/persons/71364/71364_v9_ba.jpg', 'James McTeigue', 'http://www.gstatic.com/tv/thumb/persons/465552/465552_v9_bb.jpg', 'http://2.bp.blogspot.com/_oWQcH8AVe50/TTYfYVE2lII/AAAAAAAAAlw/5d-35wCWyfg/s1600/Picture1.png', 'Mystery/Thriller', 'Thriller', 0, 3.5),
(30, 'Jurassic Park', 'http://www.gstatic.com/tv/thumb/v22vodart/14812/p14812_v_v8_ai.jpg', 'Jeff Goldblum', 'http://www.gstatic.com/tv/thumb/persons/656/656_v9_ba.jpg', 'Laura Dern', 'http://www.gstatic.com/tv/thumb/persons/433/433_v9_bb.jpg', 'Steven Spielberg', 'http://www.gstatic.com/tv/thumb/persons/1672/1672_v9_ba.jpg', 'https://d1zqayhc1yz6oo.cloudfront.net/8b36764bdf18952950536d4333b36a9c.jpg', 'Fantasy/Mystery', 'Mystery', 0, 3.8),
(31, 'Fantastic Beasts And Where To Find Them', 'http://www.gstatic.com/tv/thumb/v22vodart/11714769/p11714769_v_v8_al.jpg', 'Eddie Redmayne', 'http://www.gstatic.com/tv/thumb/persons/448398/448398_v9_bb.jpg', 'Katherine Waterston', 'http://www.gstatic.com/tv/thumb/persons/518777/518777_v9_bb.jpg', 'David Yates', 'http://www.gstatic.com/tv/thumb/persons/300982/300982_v9_ba.jpg', 'https://www.demco.com/webprd_demco/images2/products/P04/x1280491a_d.jpg', 'Fantasy/Adventure', 'Adventure', 0, 3.3),
(32, 'Pirates of the Caribbean: The Curse of the Black Pearl', 'http://www.gstatic.com/tv/thumb/v22vodart/32093/p32093_v_v8_aa.jpg', 'Johnny Depp', 'http://www.gstatic.com/tv/thumb/persons/33623/33623_v9_bc.jpg', 'Keira Knightley', 'http://www.gstatic.com/tv/thumb/persons/245574/245574_v9_bb.jpg', 'Gore Verbinski', 'http://www.gstatic.com/tv/thumb/persons/74174/74174_v9_bb.jpg', 'https://www.demco.com/webprd_demco/images2/products/P04/x1280491a_d.jpg', 'Fantasy/Adventure', 'Adventure', 0, 3.8);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `UID` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`UID`, `movie_id`) VALUES
(0, 1),
(1, 16),
(0, 12),
(1, 2),
(0, 20),
(0, 10),
(0, 13),
(8, 15),
(1, 1),
(2, 12),
(7, 15),
(4, 10),
(5, 4),
(5, 21),
(3, 22),
(6, 24),
(7, 23),
(9, 14),
(9, 10),
(9, 11),
(5, 4),
(8, 20),
(4, 20),
(2, 1),
(3, 10),
(3, 4),
(3, 17),
(7, 3),
(7, 4),
(7, 4),
(7, 12),
(8, 10),
(8, 4),
(8, 23),
(8, 18),
(6, 10),
(6, 19),
(6, 13),
(6, 18),
(0, 25),
(0, 26),
(0, 27),
(0, 28),
(1, 25),
(1, 27);

-- --------------------------------------------------------

--
-- Table structure for table `recommendation`
--

CREATE TABLE `recommendation` (
  `UID` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `comedy` int(11) NOT NULL,
  `thriller` int(11) DEFAULT NULL,
  `horror` int(11) DEFAULT NULL,
  `mystery` int(11) DEFAULT NULL,
  `adventure` int(11) DEFAULT NULL,
  `crime` int(11) DEFAULT NULL,
  `fiction` int(11) DEFAULT NULL,
  `drama` int(11) DEFAULT NULL,
  `fantasy` int(11) DEFAULT NULL,
  `romance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `uname`, `upassword`) VALUES
(0, 'abc@gmail.com', '123'),
(1, 'komal188d@gmail.com', '123'),
(2, 'darjisag@gmail.com', '123'),
(3, 'sum@gmail.com', '123'),
(4, 'KO@gmail.com', '123'),
(5, 'SA@gmail.com', '121'),
(6, 'asdf@gmail.com', '432'),
(7, 'dfs@gmail.com', '654'),
(8, 'dsa@gmail.com', '123'),
(9, 'jgh@gmail.com', '654'),
(10, 'shubh@gmail.com', 'Komal123'),
(11, 'darjisag@gmail.com', 'Darjisag@7'),
(12, 'ko@gmail.com', 'Ko@12345'),
(13, 'res@gmail.co.in', 'Res@12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`actor_name`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`d_name`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD KEY `UID` (`UID`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`);

--
-- Constraints for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD CONSTRAINT `recommendation_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
