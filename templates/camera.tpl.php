<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Об авторе</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div id="wrapper">
    <div class="cap"> <?php echo $cap;?> </div>

    <div class="menu"> <?php echo $menu;?> </div>

    <section>
    <figure>
        <img src=<?php echo $product['image'];?> alt="">
        <h3> Модель </h3>
        <p>  <?php echo $product['name'];?> </p>
        <h3> Код товара </h3>
        <p>  <?php echo $product['product_code'];?> </p>
        <h3> В наличии </h3>
        <p>  <?php echo $product['quantity'];?> шт. </p>
        <h3> Гарантия </h3>
        <p>  <?php echo $product['guarantee_years'];?> лет </p>
        <h3> Тип матрицы </h3>
        <p>  <?php echo $product['matrix_type'];?> </p>
        <h3> Формат записи </h3>
        <p>  <?php echo $product['recording_format'];?> </p>
        <h3> Количество мегапикселей (общее) </h3>
        <p>  <?php echo $product['total_mp_quantity'];?> </p>
        <h3> Цена </h3>
        <p>  <?php echo $product['price'];?> </p>
    </figure>
    </section>

<div class="footer"> <?php echo $footer;?> </div>

</body>
</html>