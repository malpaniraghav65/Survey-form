<?php  
    $servername = "localhost";  
    $username = "root";  
    $password = "Aws@2022";  
    $db_name = "test1";
    $con = mysqli_connect($servername, $username, $password, $db_name);
    if($con){
        echo "Database Connected successfully!</br>";
    } else{
        echo "Not Connected successfully!";
    }
?>   