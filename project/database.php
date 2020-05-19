<?php

const DB_DSN = 'mysql:host=localhost;dbname=purchase;charset=utf8';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';

try {
    $connection = new PDO(DB_DSN, DB_USERNAME,
        DB_PASSWORD);
} catch (PDOException $e) {
    die("Kết nối thất bại: " .$e->getMessage());
}

echo '<h3>Kết nối CSDL sử dụng PDO thành công</h3>';
?>