<?php
    $user = "fairuz";
    $password = "password";
    $database = "sait_db";
    $table = "data_mahasiswa";

    try {
        $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>