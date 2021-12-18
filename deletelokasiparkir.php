<?php
require_once 'conn.php';

    if(isset($_GET['Del']))
    {
        $IDLokasi = $_GET['Del'];
        $query = "update lokasiparkir set Deleted = 1 Where IDLokasi ='".$IDLokasi."'";
        $result= mysqli_query($conn,$query);
        if($result)
        {
            header("location:lokasiparkir.php");
        }    
        else
        {
            echo 'Please Check Your Query';
        }
    }   
    else
    {
        header("location:lokasiparkir.php");
    }
?>