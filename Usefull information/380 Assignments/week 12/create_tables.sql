create table actor
(	actorid int unsigned not null auto_increment primary key,
	firstname char(30) not null,
	middlename char(30),
	lastname char(30) not null,
	birthdate date not null,
	birthplace char(30),
	gender char(1)
);



create table director
(	directorid int unsigned not null auto_increment primary key,
	firstname char(30) not null,
	lastname char(30) not null
);


create table movie
(	movieid int unsigned not null auto_increment primary key,
	title char(30) not null,
	directorid int unsigned not null,
	year int unsigned not null,
	genre char(20) not null,
	runtime int unsigned not null,
	plotdescription text,
	comments text
);



