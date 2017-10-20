<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thrive| Contact</title>
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
                <li class="active"><a href="index.php">Contact</a></li>
                <li><a href="customer.php">Customer</a></li>
                <li><a href="email.php">Email</a></li>
            </ul>
        </div>
    </nav>
        
        <div class="container" style="margin-top:50px">
        <h1>Contacts</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Contact ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Customer ID</th>
                    <th>Email ID</th>
                    <th>Contact Date</th>
                    <th>Party Host</th>
                    <th>Become a Consultant</th>
                </tr>
            </thead>
            <tbody>
                           <?php
          
        require 'herokuDBConnect.php';
        $contactquery = 'select CONTACT_ID, FIRST_NAME, LAST_NAME, CUSTOMER_ID, EMAIL_ID, CONTACT_DATE, PARTY_HOST, BECOME_A_CONSULTANT from CONTACT;';

$contactresultObj = $db->query($contactquery);

if($contactresultObj -> rowCount() > 0)
{
    foreach ($contactresultObj as $singleRowFromQuery)
    {
        echo '<tr>';
        echo '<th scope="row"> '. $singleRowFromQuery['contact_id'] . '</th>';
        echo "<td>". $singleRowFromQuery['first_name']. '</td>';
        echo "<td>". $singleRowFromQuery['last_name']. '</td>';
        echo "<td>". $singleRowFromQuery['customer_id'].'</td>';
        echo "<td>". $singleRowFromQuery['email_id'].'</td>';
        echo "<td>". $singleRowFromQuery['contact_date'].'</td>';
        echo "<td>". $singleRowFromQuery['party_host'].'</td>';
        echo "<td>". $singleRowFromQuery['become_a_consultant'].'</td>';
        echo "</tr>";
    }

}
        ?>  
            </tbody>
        </table>
    </div>
    </body>
</html>
