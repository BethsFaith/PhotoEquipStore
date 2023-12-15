CREATE TABLE MEMORY_CARDS (id integer auto_increment primary key, name varchar(120), product_code integer unique not null,
     quantity integer unsigned not null, type varchar(30), volume integer unsigned not null,
     max_reed_speed_mb integer unsigned not null, max_write_speed_mb integer unsigned not null,
     price integer unsigned not null);