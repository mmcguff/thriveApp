<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thrive|Customer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
           <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Thrive Well for Life</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Contact</a></li>
                <li class="active"><a href="customer.php">Customer</a></li>
                <li><a href="email.php">Email</a></li>
            </ul>
        </div>
    </nav>
        <div class="container" style="margin-top:50px">
        <h1>Customers</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Email ID</th>
                    <th>On Home Deliveries</th>
                    <th>Last Order Date</th>
                </tr>
            </thead>
            <tbody>
        <?php
          
        require 'herokuDBConnect.php';
$customerquery = 'select CUSTOMER_ID, EMAIL_ID, ON_HOME_DELIVERIES, LAST_ORDER_DATE from CUSTOMER;';

$customerresultObj = $db->query($customerquery);

if($customerresultObj -> rowCount() > 0)
{
    foreach ($customerresultObj as $singleRowFromQuery)
    {
        echo '<tr>';
        echo '<th scope="row"> '. $singleRowFromQuery['customer_id'] . '</th>';
        echo "<td>". $singleRowFromQuery['email_id']. '</td>';
        echo "<td>". $singleRowFromQuery['on_home_deliveries']. '</td>';
        echo "<td>". $singleRowFromQuery['last_order_date'].'</td>';
        echo "</tr>";
    }
}
        ?>  
            </tbody>
        </table>
    </div>
    </body>
</html>

