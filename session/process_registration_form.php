<?php
require_once __DIR__.'/../boot.php';
require_once __DIR__.'/do_login.php';

$conn = mysqli_connect_db();

$nickname = $_POST['nickname'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM `users` WHERE nickname = '$nickname' OR email = '$email'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    flash('Пользователь с такими данными уже зарегистрирован');
    header('Location: ../index.php');
    die;
}

$sql = "INSERT INTO `users` (`nickname`, `email`, `password`)
VALUES ('$nickname', '$email', '$hash')";

if ($conn->query($sql) === TRUE) {
    login($nickname, $email, $password, $hash);
}
header('Location: ../index.php');
?>