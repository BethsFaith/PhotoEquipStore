<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Магазин фототехники</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div id="wrapper">
    <div class="cap"> <?php echo $cap;?> </div>

    <div class="menu"> <?php echo $menu;?> </div>

    <section>
        <blockquote>
            <p>
                <?php echo $quote;?>
            </p>
            <cite><?php echo $quoteAuthor;?></cite>
        </blockquote>

        <?php echo $about;?>

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