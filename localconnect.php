<?php



$dbUser = 'shtajkjmvozpfk';
$dbPassword = 'missionary1';
$dbName = 'de743ivi3pifk3';
$dbHost = 'ec2-54-235-88-58.compute-1.amazonaws.com';
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

$query = 'select "EmailID","EmailAddress" from thrive."Email"';

$resultObj = $db->query($query);

if($resultObj -> rowCount() > 0)
{
    foreach ($resultObj as $singleRowFromQuery)
    {
        echo "EmailID: ". $singleRowFromQuery['emailid'].PHP_EOL;
        echo "EmailAddress: ". $singleRowFromQuery['emailaddress'].PHP_EOL;
    }
}



