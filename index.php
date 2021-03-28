<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>php below</h1>
    <?php 
     $server = 'sql311.epizy.com';
     $username = 'epiz_28254681';
     $password = 'NBt5QpJBNf';
     $dbname = 'epiz_28254681_samUsedCars';
    
    $conn = mysql_connect($server, $username, $password)
        or die('Error connecting to mysql');
    
    //$db_name = 'epub';
    mysql_select_db($dbname);


    
    
    
    ?>
</body>
</html>