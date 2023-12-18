CREATE TABLE CAMERAS (id integer auto_increment primary key, name varchar(120), product_code integer unique not null,
                      quantity integer unsigned not null, guarantee_years integer unsigned,
                      total_mp_quantity float unsigned not null, matrix_type varchar(120) not null,
                      recording_format varchar(120) not null, price integer unsigned not null,
                      image varchar(1024) not null);

/*CREATE TRIGGER before_insert_camera BEFORE INSERT ON CAMERAS FOR EACH ROW
BEGIN
    SET new.id = 0;
end;*/