CREATE TABLE LENSES (id integer auto_increment primary key, name varchar(120), product_code integer unique not null,
                     quantity integer unsigned not null, guarantee_years integer unsigned, type varchar(30),
                     focal_length_mm integer unsigned, price integer unsigned not null);