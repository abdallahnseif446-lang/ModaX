<?php
$connect = new mysqli("localhost", "root", "", "moudaX", 3307);

// Check connection
if ($connect->connect_error) {
    die("DB connection error: " . $connect->connect_error);
}
?>
