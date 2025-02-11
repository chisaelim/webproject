<?php
$host = 'localhost'; // '127.0.0.1'
$db_name = 'webproject'; // semi colon
$user = 'root';
$passwd = '';


$db = new mysqli($host, $user, $passwd, $db_name);
if ($db->connect_error) {
    echo 'connection failed';
    die();
}
