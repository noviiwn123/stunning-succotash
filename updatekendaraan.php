<?php
include 'conn.php';
 
		if(empty($_POST['IDKendaraan']) || empty($_POST['Keterangan']))
		{
		echo "<script>alert('Ada yg Masih Kosong!');history.go(-1);</script>";
		}
	else
	{
	$IDKendaraan = $_POST['IDKendaraan'];
	$Keterangan = $_POST['Keterangan'];

		$sql = "UPDATE kendaraan SET IDKendaraan='$IDKendaraan',Keterangan='$Keterangan' WHERE IDKendaraan='".$IDKendaraan."'";
        $result= $conn->query($sql);
        if($result)
        {
            header("location:kendaraan.php");
        }    
	}
?>