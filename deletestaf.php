<?php
require_once 'conn.php';

    if(isset($_GET['Del']))
    {
        $IDStaf = $_GET['Del'];
        $query = "update staf set Deleted = 1 Where IDStaf ='".$IDStaf."'";
        $result= mysqli_query($conn,$query);
        if($result)
        {
            header("location:staf.php");
        }    
        else
        {
            echo 'Please Check Your Query';
        }
    }   
    else
    {
        header("location:staf.php");
    }
?>