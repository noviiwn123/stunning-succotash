<?php
include 'conn.php';
		if(empty($_POST['username']) || empty($_POST['password']))
		{
		echo "<script>alert('Ada yg Masih Kosong!');history.go(-1);</script>";
		}
	else
	{
	$username   = $_POST['username'];
	$password   = $_POST['password'];

		$sql = "INSERT INTO login (username,password) VALUES('$username','$password')";
        $result= $conn->query($sql);
        if($result)
        {
            echo "<script>alert('Sudah Berhasil Register!');history.go(-1);</script>";
        }    
				else {
			echo "<script>alert('Data Ada Yang Sama!');history.go(-1);</script>";
		}
	}
	?>



