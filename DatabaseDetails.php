<?php
    $n = $_REQUEST['t_name'];
    $e = $_REQUEST['t_email'];
    $p = $_REQUEST['t_role'];

    if($n!='' && $e!='' && $p!='')
    {
        $q="insert into survey_details values('$n','$e','$p')";
        $result = mysqli_query($con,$q);
        $n=$e=$p='';
    }
    else{
        echo "<i><u>ERROR : All fields are not properly field.!!</u></i><br>";
    }
    
    
?>