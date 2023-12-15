CREATE TABLE CAMERAS (id integer auto_increment primary key, name varchar(120), product_code integer unique not null,
                     quantity integer unsigned not null, guarantee_years integer unsigned, matrix_type varchar(30) not null,
                     recording_format varchar(120) not null, total_mp_quantity float unsigned not null,
                     price integer unsigned not null);