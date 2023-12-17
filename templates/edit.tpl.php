<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="styles/editstyle.css">
</head>
<body>
<div id="wrapper">

    <div class="menu"> <?php echo $menu;?> </div>

    <section>
    <figure>
        <?php
        $num = count($items);
        for ($i = 0; $i < $num; ++$i) {
            ?>
            <h3> <?php echo $items[$i]['name']?> </h3>
            <p><?php echo $items[$i]['content']?></p>
        <?php } ?>

        <h2>Элемент: </h2>
        <form action="<?php echo $action?>" method="POST">
            <select name = "name">
                <?php
                for ($i = 0; $i < $num; ++$i) { ?>
                    <option label="<?php echo $items[$i]['name']?>"
                            value= "<?php echo $items[$i]['name']?>">
                    </option>
                <?php } ?>
            </select>
            <h2>Содержимое: <input type="text" name="content" /></h2>
            <input type="submit" value="Отправить">
        </form>
    </figure>
    </section>>
</div>

</body>
</html>