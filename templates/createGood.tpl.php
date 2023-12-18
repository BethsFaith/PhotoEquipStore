<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="styles/editstyle.css">
</head>
<body>
<div id="wrapper">

    <div class="cap"> <?php echo $cap;?> </div>

    <p class="heading"> User:
        <?php echo $_COOKIE['user']; ?>

    <div class="menu"> <?php echo $menu;?> </div>

    <section>
        <figure>
            <?php
            $num = count($product); ?>
             <form action="insert.php?table=<?php echo $table?>" method="POST">
                 <?php foreach ($product as $key => $value) : ?>
                <h2><input type="text" name="<?php echo $key?>"/> <?php echo $key?></h2>
                 <?php endforeach?>
                <input type="submit" value="Сохранить">
            </form>
        </figure>
    </section>>
</div>
<div class="footer"> <?php echo $footer;?> </div>
</body>
</html>