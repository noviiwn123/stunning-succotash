<?php
require_once 'conn.php';


        $IDStaf = $_GET['Del'];
        $query = "delete from staf";
        $result= mysqli_query($conn,$query);
        if($result)
        {
            header("location:clear1.php");
        }    
        else
        {
            echo 'Please Check Your Query';
        }   
?>