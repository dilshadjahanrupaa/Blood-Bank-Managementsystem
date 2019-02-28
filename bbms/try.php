<?php

// php code -> 1bestcsharp.blogspot.com
// php insert data to mysql database using PDO

if(isset($_POST['insert']))
{
    try {

        // connect to mysql

        $pdoConnect = new PDO("mysql:host=localhost;dbname=test_db","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

    // get values form input text and number
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `users`(`fname`, `lname`, `age`) VALUES (:fname,:lname,:age)";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":fname"=>$fname,":lname"=>$lname,":age"=>$age));
    
        // check if mysql insert query successful
    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
}


?>

<!DOCTYPE html>

<html>

    <head>

        <title>PHP INSERT DATA USING PDO</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <form action="php_insert_data_in_mysql_database_using_pdo.php" method="post">

            <input type="text" name="fname" required placeholder="First Name"><br><br>

            <input type="text" name="lname" required placeholder="Last Name"><br><br>

            <input type="number" name="age" required placeholder="Age" min="10" max="100"><br><br>

            <input type="submit" name="insert" value="Insert Data">

        </form>

    </body>

</html>
