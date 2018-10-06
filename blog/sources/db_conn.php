<?php
    $root = $_SERVER["DOCUMENT_ROOT"];

    include($root . '/blog/sources/db_credentials.php');

    // create connection
    $connect = new mysqli($server, $user, $pass, $db_name);

    // check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    // set default charset
    $connect->set_charset("utf8");

    // for debugging purposes only
    // echo 'Connection successfully made!';
?>