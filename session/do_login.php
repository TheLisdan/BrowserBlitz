<?php
require_once __DIR__.'/../boot.php';

function login(?string $nickname = NULL, ?string $email, ?string $password, ?string $hash = null) {
    $conn = mysqli_connect_db();
    $sql = "SELECT * FROM `users` WHERE nickname = '$nickname' OR email = '$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 0) {
        flash('Пользователь с такими данными не зарегистрирован');
        header('Location: ../index.php');
        die;
    }
    $row = $result->fetch_assoc();
        

    if (password_verify($password, $hash)) {
        if(password_needs_rehash($hash, PASSWORD_DEFAULT)) {
            $newHash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "UPDATE `users` SET `password` = $hash WHERE nickname = '$nickname'";
        }
        $_SESSION['user_id'] = $row['id'];
    }
}
?>