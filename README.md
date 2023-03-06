# WinWay-University-Website

ADMIN LOGIN 
Username : user
Password : pass

TEACHER LOGIN 
Username : teacher
Password : pass


///////////////////////////////////////////////////////////////////
//	WINWAY UNIVERSITY - DATABASE
///////////////////////////////////////////////////////////////////


CREATE DATABASE WinWay_University;
USE WinWay_University;


CREATE TABLE subscribe(
	email		varchar(50)	NOT NULL	PRIMARY KEY
);

///////////////////////////////////////////////////////////////////

CREATE TABLE contact(
	id		int 		NOT NULL 	AUTO_INCREMENT PRIMARY KEY,
	name		varchar(50) 	NOT NULL,
	email		varchar(50) 	NOT NULL,
	phone		int 		NOT NULL,
	subject		varchar(100),
	message		varchar(1000) 	NOT NULL
);



///////////////////////////////////////////////////////////////////

CREATE TABLE registration(
	id		int 		NOT NULL 	AUTO_INCREMENT PRIMARY KEY,
	Fname		varchar(50) 	NOT NULL,
	Lname		varchar(50) 	NOT NULL,
	faculty		varchar(50) 	NOT NULL,
	birthday 	varchar(50) 	NOT NULL,
	PFname		varchar(50) 	NOT NULL,
	PLname		varchar(50) 	NOT NULL,
	address		varchar(1000) 	NOT NULL,
	nic		varchar(12) 	NOT NULL,
	city		varchar(50) 	NOT NULL,
	phone		int 		NOT NULL,
	email		varchar(50) 	NOT NULL,
	comment		varchar(1000),
	sign		varchar(50) 	NOT NULL
);

///////////////////////////////////////////////////////////////////

CREATE TABLE results(
	sid		int 		NOT NULL 	AUTO_INCREMENT PRIMARY KEY,
	Fname		varchar(50)	NOT NULL,
	Lname		varchar(50)	NOT NULL,
	faculty		varchar(50)	NOT NULL,
	branch		varchar(50)	NOT NULL,
	nic		varchar(12)	NOT NULL,
	indexNo		varchar(20)	NOT NULL,
	semester	varchar(50)	NOT NULL,
	subject		varchar(50)	NOT NULL,
	grade		varchar(3)	NOT NULL,
	comment		varchar(1000),
	sign		varchar(50)	NOT NULL,
);

![Winway](https://user-images.githubusercontent.com/89802304/223206220-080c1bed-52ae-44d0-88bd-c9ba5f564b2c.jpg)
