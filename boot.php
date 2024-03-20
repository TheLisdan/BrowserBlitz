<?php
session_start();

function mysqli_connect_db(): mysqli {
    static $mysqli;

    if (!$mysqli) {
        $jsonData = file_get_contents(__DIR__ . '/./config.json');
        $config = json_decode($jsonData, true);
        $mysqli = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);

        if ($mysqli->connect_error) {
            die("Ошибка подключения: " . $mysqli->connect_error);
        }
    }

    return $mysqli;
}

function flash(?string $message = null) {
    if($message) {
        $_SESSION['flash'] = $message;
    } else {
        if (!empty($_SESSION['flash'])) { ?>
            <div>
                <?=$_SESSION['flash']?>
            </div>
        <?php }
        unset($_SESSION['flash']);
    }
}

function check_auth(): bool {
    return !!($_SESSION['user_id'] ??false);
}
?>