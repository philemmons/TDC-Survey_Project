<?php

/* connection script */

    // https://devcenter.heroku.com/articles/jawsdb#using-jawsdb-with-php
    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);
    $host = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $dbname= ltrim($dbparts['path'],'/');

    try {
        //Creating database connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Setting Errorhandling to Exception
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "Connected successfully";
    }
    catch (PDOException $e) {
        echo "Could not connect to the database because: ". $e->getMessage();
        exit();
    }
?>