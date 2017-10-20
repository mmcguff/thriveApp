<?php

    $dbUser = 'lrdbsbqsqsfcjs';
    $dbPassword = '0bc8372040ecfaa7fce32827a7b470ed3a602affa7e8fe02e5078934e72d419e';
    $dbName = 'de8ob3n0ftf9ku';
    $dbHost = 'ec2-107-20-255-96.compute-1.amazonaws.com';
    $dbPort = '5432';
try
{
    $db = new PDO("pgsql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex)
{
    echo "$ex";
    die();
}