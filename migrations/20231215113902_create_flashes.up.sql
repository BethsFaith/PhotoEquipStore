CREATE TABLE FLASHES (id integer auto_increment primary key, name varchar(120), product_code integer unique not null,
     quantity integer unsigned not null, guarantee_years integer unsigned, type varchar(30), type_bracing varchar(30),
    compatible_camera_model varchar(30) not null, battery_type varchar(50), battery_count integer unsigned not null,
    price integer unsigned not null);