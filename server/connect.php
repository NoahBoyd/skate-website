<?php 

try {
    $dbh = new PDO("mysql:host=localhost;dbname=skate_website", "root", "");
} catch (Exception $e) {
    die("ERROR: Couldn't connect to database. {$e->getMessage()}");
}