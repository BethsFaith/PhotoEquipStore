CREATE TABLE USERS (id integer auto_increment primary key, login varchar(30) unique not null,
                    password varchar(30) not null, role enum('admin','moderator'));