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


![Picture2](https://user-images.githubusercontent.com/89802304/223198391-0100482c-a2a5-40e9-a3f3-f4b6c884ac35.png)
![Picture1](https://user-images.githubusercontent.com/89802304/223198380-8da80863-eb58-4266-9d7a-9ff31a472009.png)
![Picture3](https://user-images.githubusercontent.com/89802304/223198681-ae8bee30-9eb8-482e-8714-85b10dfa5dcc.png)
![Picture4](https://user-images.githubusercontent.com/89802304/223198688-8799af0f-6a53-4b76-b7f1-9bad2d623f89.png)
![Picture5](https://user-images.githubusercontent.com/89802304/223198691-aa528267-9b83-4f16-a62b-10dfafabab47.png)
![Picture6](https://user-images.githubusercontent.com/89802304/223198694-9736a827-4016-47e1-a525-ca7002e66578.png)
![Picture7](https://user-images.githubusercontent.com/89802304/223198695-cfb121bd-a60a-4105-aca2-29ce51006b6d.png)
![Picture8](https://user-images.githubusercontent.com/89802304/223198699-c4472d3d-d925-4f37-ad5a-15e5e360abe1.png)
![Picture10](https://user-images.githubusercontent.com/89802304/223198809-4b98bdea-8615-4ad4-8b6f-28e2bffe6abf.png)
![Picture9](https://user-images.githubusercontent.com/89802304/223198817-da515925-bdb2-4e4d-a96a-ee71e305634c.png)
