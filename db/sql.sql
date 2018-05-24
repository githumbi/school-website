CREATE TABLE submit(
	id int(128) not null PRIMARY KEY AUTO_INCREMENT,
    student varchar(128) not null,
    parent varchar(128) not null,
    classs varchar(128) not null
);

CREATE TABLE contact(
	id int(128) not null PRIMARY KEY AUTO_INCREMENT,
    name varchar(128) not null,
    email varchar(128) not null,
    message varchar(128) not null
);