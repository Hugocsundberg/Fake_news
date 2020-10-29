<?php

declare(strict_types=1);
header('Access-Control-Allow-Origin: *');
require('passwords.php');
$dsn = "pgsql:host=ec2-52-48-65-240.eu-west-1.compute.amazonaws.com;dbname=dft8p9p93uil1g;user=iyrfwwzozstveu;password=$password";

try {
    $conn = new PDO($dsn);
} catch (Exception $e) {
    echo "something is wrong :C this is error: $e";
}

$data = $conn->query(
    "SELECT * from posts
    ORDER BY date DESC"
)->fetchAll();
$JSONdata = json_encode($data);

($conn->errorInfo());

echo $JSONdata;
