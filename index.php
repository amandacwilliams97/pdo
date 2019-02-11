<?php
/**
 * Created by PhpStorm.
 * User: mandy
 * Date: 2/11/2019
 * Time: 9:45 AM
 */
/*
 * Amanda Williams
 * February 11, 2019
 * 328/pdo/index.php
 */

#Initial variables
$dbName="awilliam_grc";
$username="awilliam_grcuser";
$password="Mandygirl97";

#Connect to Database
try {
    #Instantiate a database object
    $dbh = new PDO("mysql:dbname=$dbName",
        "$username", "$password");
    echo 'Connected to database!';
}
catch (PDOException $e) {
    echo $e->getMessage();
}