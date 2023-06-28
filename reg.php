<?php
require_once("../db/db.php");
var_dump($_POST);
$login = $_POST['login'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$create_user = mysqli_query($link, "INSERT INTO `user`(`login`, `password`, `phone`) VALUES ('$login','$password', '$phone')");
if($create_user) {
header("Location: ../index.php");
}
?>
