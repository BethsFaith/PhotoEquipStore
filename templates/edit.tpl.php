<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="editstyle.css">
</head>
<body>
<div id="wrapper">

    <div class="menu"> <?php echo $menu;?> </div>

    <figure>
    <?php
    $num = count($items);
    for ($i = 0; $i < $num; ++$i) {
        ?>
    <h2> <?php echo $items[$i]['name']?> </h2>
    <form action="edit.php?name=<?php echo $items[$i]['name']?>&page=<?php echo $page?>" method="POST">
        <p>Контент: <input type="text" name="content" value="<?php echo $items[$i]['content']?>"
            /></p>
        <input type="submit" value="Принять">
    <?php } ?>
        <figure>

</div>

</body>
</html>