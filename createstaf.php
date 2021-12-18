<?php
include 'conn.php';
		if(empty($_POST['IDStaf']) || empty($_POST['NamaStaf']) || empty($_POST['Alamat']) || empty($_POST['Posisi']) || empty($_POST['Keterangan']))
		{
		echo "<script>alert('Ada yg Masih Kosong!');history.go(-1);</script>";
		}
	else
	{
	$IDStaf   = $_POST['IDStaf'];
	$NamaStaf   = $_POST['NamaStaf'];
	$Alamat     = $_POST['Alamat'];
	$Posisi     = $_POST['Posisi'];
	$Keterangan = $_POST['Keterangan'];

		$sql = "INSERT INTO staf (IDStaf,NamaStaf, Alamat, Posisi, Keterangan, Deleted) VALUES('$IDStaf','$NamaStaf', '$Alamat', '$Posisi', '$Keterangan', 0)";
        $result= $conn->query($sql);
        if($result)
        {
            header("location:staf.php");
        }    
				else {
			echo "<script>alert('Data Ada Yang Sama!');history.go(-1);</script>";
		}
	}
	?>