<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Магазин фототехники</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
    <div class="cap"> <?php echo $cap;?> </div>

    <aside>
        <nav>
            <ui class = "top menu">
                <li class="active">Главная страница</a></li>
                <li><a href="author.php">Об авторе</a></li>
                <li><a href="company.php">О фирме</a></li>
                </ul>
            </ui>
        </nav>

        <nav>
            <ul class="aside-menu">
                <li><a href="templates/lenses.html">Объективы</a></li>
                <li><a href="templates/photo.html">Фотоаппараты</a></li>
                <li><a href="templates/flashes.html">Вспышки</a></li>
                <li><a href="templates/memoryCards.html">Карты памяти</a></li>
            </ul>
        </nav>
    </aside>

    <section>
        <blockquote>
            <p>
                <?php echo $quote;?>
            </p>
            <cite><?php echo $quoteAuthor;?></cite>
        </blockquote>

        <p>It was taken some time ago</p>
        <p>Of paper I was looking through</p>
        <p>At first it seems to be,</p>
        <p>a smeared.</p>
        <p>print: blurred lines and grey flecks</p>
        <p>blended with the paper;</p>

        <figure>
            <img src=<?php echo $contentImage;?> alt="">
        </figure>
        <figure>
            <img src=<?php echo $contentImage2;?> alt="">
        </figure>

    </section>

</div>
    <div class="footer"> <?php echo $footer;?> </div>
</body>
</html>