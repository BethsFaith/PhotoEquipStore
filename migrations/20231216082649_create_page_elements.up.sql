CREATE TABLE PAGE_ELEMENTS(id integer auto_increment primary key, name varchar(30) not null, type varchar(30),
    content varchar(256), page_id integer not null references PAGES(id),
                           CONSTRAINT pk_ELEM_ID unique (page_id,name));