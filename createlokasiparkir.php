<?php
include 'conn.php';
		if(empty($_POST['IDLokasi']) || empty($_POST['NamaLokasi']) || empty($_POST['Keterangan']) || empty($_POST['Status']))
		{
		echo "<script>alert('Ada yg Masih Kosong!');history.go(-1);</script>";
		}
	else
	{
	$IDLokasi   = $_POST['IDLokasi'];
	$NamaLokasi   = $_POST['NamaLokasi'];
	$Status     = $_POST['Status'];
	$Keterangan = $_POST['Keterangan'];

		$sql = "INSERT INTO lokasiparkir (IDLokasi,NamaLokasi, Status, Keterangan , Deleted) VALUES('$IDLokasi','$NamaLokasi', '$Status', '$Keterangan', 0)";
        $result= $conn->query($sql);
        if($result)
        {
            header("location:lokasiparkir.php");
        }    
		else {
			echo "<script>alert('Data Ada Yang Sama!');history.go(-1);</script>";
		}
			
	}

	?>