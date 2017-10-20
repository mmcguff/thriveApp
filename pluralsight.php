<?php



$dbUser = 'postgres';
$dbPassword = 'missionary1';
$dbName = 'postgres';
$dbHost = 'localhost';
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


$query = 'select emailid, emailaddress from email';

$resultObj = $db->query($query);

if($resultObj -> rowCount() > 0)
{
    foreach ($resultObj as $singleRowFromQuery)
    {
        echo "EmailID: ". $singleRowFromQuery['emailid'].PHP_EOL;
        echo "EmailAddress: ". $singleRowFromQuery['emailaddress'].PHP_EOL;
    }
}



