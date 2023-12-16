<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Об авторе</title>
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
<div id="wrapper">
    <div class="cap"> <?php echo $cap;?> </div>

    <aside>
        <nav>
            <ui class = "top menu">
                <li><a href="index.php"> Главная страница</a></li>
                <li class="active">Об авторе</a></li>
                <li><a href="company.php">О фирме</a></li>
                </ul>
            </ui>
        </nav>

        <nav>
            <ul class="aside-menu">
                <li><a href="lenses.html">Объективы</a></li>
                <li><a href="photo.html">Фотоаппараты</a></li>
                <li><a href="flashes.html">Вспышки</a></li>
                <li><a href="memoryCards.html">Карты памяти</a></li>
            </ul>
        </nav>
    </aside>

    <section>
        <h3> <?php echo $authorName;?> </h3>
        <h3> <?php echo $authorWork;?> </h3>
        <img class="full" src=<?php echo $authorImage;?> alt="">
    </section>

</div>

<div class="footer"> <?php echo $footer;?> </div>

</body>
</html>