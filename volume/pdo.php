<?php
try {
    $pdo = new PDO("mysql:host=mysql","root","Abcd@123456");
    $pdo = null;
    print "连接成功";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}