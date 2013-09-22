INSERT INTO User VALUES
 (
 'sportslover', 'Paul', 'Walker', 'abc', 'sportslover@hotmail.com' 
 );
 INSERT INTO User VALUES
 (
 'traveler', 'Rebecca', 'Travolta', 'abc', 'rebt@explorer.org' 
 );
 INSERT INTO User VALUES
 (
 'spacejunkie', 'Bob', 'Spacey', 'abc', 'bspace@spacejunkies.net' 
 );
 
 

 INSERT INTO Album VALUES
 (
 1, 'I love sports', CURDATE(), CURDATE(), 'sportslover'
 );
 INSERT INTO Album (title, created, lastupdated, username)VALUES
 (
 'I love football', CURDATE(), CURDATE(), 'sportslover'
 );
  INSERT INTO Album (title, created, lastupdated, username)VALUES
 (
 'Around The World', CURDATE(), CURDATE(), 'traveler'
 );
  INSERT INTO Album (title, created, lastupdated, username)VALUES
 (
 'Cool Space Shots', CURDATE(), CURDATE(), 'spacejunkie'
 );
 
 

 INSERT INTO Photo VALUES
( 'pic1', '/pictures/pic1.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic2', '/pictures/pic2.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic3', '/pictures/pic3.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic4', '/pictures/pic4.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic5', '/pictures/pic5.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic6', '/pictures/pic6.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic7', '/pictures/pic7.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic8', '/pictures/pic8.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic9', '/pictures/pic9.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic10', '/pictures/pic10.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic11', '/pictures/pic11.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic12', '/pictures/pic12.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic13', '/pictures/pic13.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic14', '/pictures/pic14.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic15', '/pictures/pic15.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic16', '/pictures/pic16.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic17', '/pictures/pic17.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic18', '/pictures/pic18.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic19', '/pictures/pic19.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic20', '/pictures/pic20.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic21', '/pictures/pic21.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic22', '/pictures/pic22.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic23', '/pictures/pic23.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic24', '/pictures/pic24.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic25', '/pictures/pic25.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic26', '/pictures/pic26.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic27', '/pictures/pic27.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic28', '/pictures/pic28.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic29', '/pictures/pic29.jpg', 'jpg', CURDATE()
 );
  INSERT INTO Photo VALUES
( 'pic30', '/pictures/pic30.jpg', 'jpg', CURDATE()
 );
 

 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(1,'pic1','sports_s1',1);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(1,'pic2','sports_s2',2);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(1,'pic3','sports_s3',3);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(1,'pic4','sports_s4',4);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(1,'pic5','sports_s5',5);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(1,'pic6','sports_s6',6);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(1,'pic7','sports_s7',7);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(1,'pic8','sports_s8',8);

 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(2,'pic9','football_s1',1);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(2,'pic10','football_s2',2);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(2,'pic11','football_s3',3);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(2,'pic12','football_s4',4);

 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic13','world_EiffelTower',1);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic14','world_firenze',2);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic15','world_GreatWall',3);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic16','world_Isfahan',4);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic17','world_Istanbul',5);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic18','world_Persepolis',6);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic19','world_Reykjavik',7);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic20','world_Seoul',8);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic21','world_Stonehenge',9);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic22','world_TajMahal',10);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic23','world_TelAviv',11);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic24','world_tokyo',12);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(3,'pic25','world_WashingtonDC',13);

 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(4,'pic26','space_EagleNebula',1);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(4,'pic27','space_GalaxyCollision',2);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(4,'pic28','space_HelixNebula',3);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(4,'pic29','space_MilkyWay',4);
 INSERT INTO Contain (albumid, picid, caption, sequencenum) VALUES
(4,'pic30','space_OrionNebula',5);
