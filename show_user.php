<?php 
require_once("./db/db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Все пользователи</title>
</head>
<body>
    Все пользователи системы:
    <?php 
    $select_all = mysqli_query($link, "SELECT * FROM `user` ORDER BY `id` DESC");
    $select_all = mysqli_fetch_all($select_all);
    foreach($select_all as $sa) { ?>
        <p>Логин: <strong><?= $sa[1]; ?></strong></p>
        <p>Телефон: <strong><?= $sa[3]; ?></strong></p>        
    <?php } ?>
</body>
</html>
