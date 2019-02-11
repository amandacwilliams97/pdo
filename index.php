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

#Connect to Database
require '/home/awilliam/config.php';
try {
    #Instantiate a database object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo 'Connected to database!';
}
catch (PDOException $e) {
    echo $e->getMessage();
}