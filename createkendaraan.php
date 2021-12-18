<?php
include 'conn.php';
		if(empty($_POST['IDKendaraan']) || empty($_POST['Keterangan']))
		{
		echo "<script>alert('Ada yg Masih Kosong!');history.go(-1);</script>";
		}
	else
	{
	$IDKendaraan   = $_POST['IDKendaraan'];
	$Keterangan   = $_POST['Keterangan'];

		$sql = "INSERT INTO kendaraan (IDKendaraan,Keterangan, Deleted) VALUES('$IDKendaraan','$Keterangan', 0)";
        $result= $conn->query($sql);
        if($result)
        {
            header("location:kendaraan.php");
        }    
				else {
			echo "<script>alert('Data Ada Yang Sama!');history.go(-1);</script>";
		}
	}
	?>