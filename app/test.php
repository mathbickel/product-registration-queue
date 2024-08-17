<?php
$pdo = new PDO('mysql:host=db;dbname=product_registration_queue', 'laravel', 'secret');
if ($pdo) {
    echo "Connection successful!";
} else {
    echo "Connection failed!";
}
