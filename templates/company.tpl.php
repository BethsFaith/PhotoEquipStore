<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>О фирме</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div id="wrapper">

        <div class="cap"> <?php echo $cap;?> </div>

        <div class="menu"> <?php echo $menu;?> </div>

        <section>
            <h2> Наша команда </h2>

            <figure>
                <img src=<?php echo $companyImage1;?> alt="">
            </figure>
            <figure>
                <img src=<?php echo $companyImage2;?> alt="">
            </figure>

            <h3> Мы располагаемся по адресу: </h3>
            <li> <?php echo $address;?> </li>

            <h3> Наш номер телефона: </h3>
            <li> <?php echo $phoneNumber;?> </li>

            <h3> Схема проезда: </h3>
            <figure>
                <img src= <?php echo $locationImage;?> alt="">
            </figure>

        </section>

    </div>

    <div class="footer"> <?php echo $footer;?> </div>
</body>
</html>