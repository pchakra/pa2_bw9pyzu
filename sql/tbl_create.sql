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
 albumid INT NOT NULL,
 FOREIGN KEY (albumid) REFERENCES Album(albumid),
 picid VARCHAR(40) NOT NULL,
 FOREIGN KEY (picid) REFERENCES Photo(picid),
 PRIMARY KEY(albumid, picid),
 caption VARCHAR(255),
 sequencenum INT
 );
 
 CREATE TABLE AlbumAccess
 (
 albumid INT NOT NULL,
 FOREIGN KEY (albumid) REFERENCES Album(albumid),
 username VARCHAR(20) NOT NULL,
 FOREIGN KEY (username) REFERENCES User(username),
 PRIMARY KEY(albumid, username)
 );
 
 ALTER TABLE Album
 ADD COLUMN access VARCHAR(7) NOT NULL DEFAULT "public"; 
 
 ALTER TABLE Album
 ADD CONSTRAINT checkAccess CHECK (access in ("public","private"));
 