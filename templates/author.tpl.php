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

    <div class="menu"> <?php echo $menu;?> </div>

    <section>
        <h3> <?php echo $authorName;?> </h3>
        <h3> <?php echo $authorWork;?> </h3>
        <img class="full" src=<?php echo $authorImage;?> alt="">
    </section>

</div>

<div class="footer"> <?php echo $footer;?> </div>

</body>
</html>