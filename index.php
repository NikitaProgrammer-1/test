<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
    <h2>Авторизация</h2>
    <form action="./vendor/log.php" method="post">
        <input type="text" name="login" placeholder="Логин" required> 
        <input type="password" name="password" placeholder="Пароль" required> 
        <input type="submit" value="Войти">
    </form>
    <a href="./registr.php">Зарегестрироваться</a>
    <br>
    <a href="./show_user.php">Пользователи</a>
    <?php
	if (($_SESSION['ErrMes'] ?? '') === ''); else {
	    print_r($_SESSION['ErrMes']);
		session_destroy();
	}
    ?>
</body>
</html>