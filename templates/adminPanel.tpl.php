<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">

    <?php if (!empty($_SESSION['user'])): ?>
    <p class="heading"> User:
        <?php echo $_SESSION['user']["name"]; ?>
    </p>
    <div class="menu"> <?php echo $menu;?> </div>

    <?php else: ?>
        <h1>Вы не авторизованы</h1>
        <a href="login.php" class="login-btn">Войти</a>
    <?php endif; ?>
</div>

</body>
</html>