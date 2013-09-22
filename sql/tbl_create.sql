CREATE TABLE User 
 ( 
 username VARCHAR(20),
 PRIMARY KEY(username),
 firstname VARCHAR(20),
 lastname VARCHAR(20),
 password VARCHAR(20),
 email VARCHAR(40)
 );
 
 CREATE TABLE Album 
 ( 
 albumid INT NOT NULL AUTO_INCREMENT,
 PRIMARY KEY(albumid),
 title VARCHAR(50),
 created DATE,
 lastupdated DATE,
 username VARCHAR(20),
 FOREIGN KEY (username) REFERENCES User(username)
 );
 
 CREATE TABLE Photo
 ( 
 picid VARCHAR(40),
 PRIMARY KEY(picid),
 url VARCHAR(255),
 format CHAR(3),
 date DATE
 );
 
 CREATE TABLE Contain
 (
 albumid INT NOT NULL AUTO_INCREMENT,
 FOREIGN KEY (albumid) REFERENCES Album(albumid),
 picid VARCHAR(40),
 FOREIGN KEY (picid) REFERENCES Photo(picid),
 PRIMARY KEY(albumid, picid),
 caption VARCHAR(255),
 sequencenum INT
 );

