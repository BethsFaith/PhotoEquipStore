
select PAGES.id into @id from PAGES where name = 'MAIN_PAGE';
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
                                                    ('quote1', 'quote',
                                                    '«Фотография – это история, которую я не могу выразить словами»',
                                                     @id);
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('quoteAuthor1', 'cite',
     'Дестин Спаркс',
     @id);
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('about', 'p', '<p>It was taken some time ago</p>
        <p>Of paper I was looking through</p>
        <p>At first it seems to be,</p>
        <p>a smeared.</p>
        <p>print: blurred lines and grey flecks</p>
        <p>blended with the paper;</p>', @id);
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('contentImage1', 'img',
     'images/content1.jpg',
     @id);
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('contentImage2', 'img',
     'images/content2.jpg',
     @id);

select PAGES.id into @id from PAGES where name = 'AUTHOR';
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('authorName', 'h3',
     'Тагильцева В.А.',
     @id);
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('authorWork', 'h3',
     'ВПР-43',
     @id);
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('authorImage', 'img',
     'images/author.png',
     @id);

select PAGES.id into @id from PAGES where name = 'COMPANY';
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('companyImage1', 'img',
     'images/cats.jpg',
     @id);
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('companyImage2', 'img',
     'images/cats2.jpg',
     @id);
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('address', 'li',
     'Площадь Гагарина, 1; 458 аудитория; 4 этаж',
     @id);
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('phoneNumber', 'li',
     '89180886006 (пожалуйста, не звоните)',
     @id);
INSERT INTO PAGE_ELEMENTS (name, type, content, page_id) VALUES
    ('locationImage', 'img',
     'images/mapR.jpg',
     @id);