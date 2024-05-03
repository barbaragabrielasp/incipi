<?php
    $user = 'root';
    $pass = '';
    $db = 'incipi';
    $host = 'localhost';

    $mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);
?>