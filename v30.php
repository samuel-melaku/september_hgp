create table posts (
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content varchar(1000) not null,
    date datetime not null
);
/* i dont think this code is runnable or anythig like that, but 
basically this makes a table with 3 different columns, subject 
content and date
the only other important thing is that "not null" specifically 
means that there cannot be an empty spot in the code