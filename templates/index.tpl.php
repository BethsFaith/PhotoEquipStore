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

    <div class="menu"> <?php echo $menu;?> </div>

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