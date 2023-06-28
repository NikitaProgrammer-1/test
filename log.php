<?php
session_start();
require_once("../db/db.php");
$login = $_POST['login'];
$password = $_POST['password'];
$select_user = mysqli_query($link, "SELECT * FROM `user` WHERE `login` = '$login'");
$select_user = mysqli_fetch_assoc($select_user);
if(!empty($select_user)) {
    if(password_verify($password, $select_user['password'])){
        header("Location: ../show_user.php");
    }
} else {
    $_SESSION['ErrMes'] = "ТПНС!";
    header("Location: ../index.php");
}
?>