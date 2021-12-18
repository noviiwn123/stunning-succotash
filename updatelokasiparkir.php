<?php
include 'conn.php';
 
		if(empty($_POST['IDLokasi']) || empty($_POST['NamaLokasi']) || empty($_POST['Status']) || empty($_POST['Keterangan']))
		{
		echo "<script>alert('Ada yg Masih Kosong!');history.go(-1);</script>";
		}
	else
	{
	$IDLokasi = $_POST['IDLokasi'];

	$NamaLokasi = $_POST['NamaLokasi'];
	$Status = $_POST['Status'];
	$Keterangan = $_POST['Keterangan'];

		$sql = "UPDATE lokasiparkir SET IDLokasi='$IDLokasi', NamaLokasi='$NamaLokasi', Status='$Status', Keterangan='$Keterangan' WHERE IDLokasi='".$IDLokasi."'";
        $result= $conn->query($sql);
        if($result)
        {
            header("location:lokasiparkir.php");
        }    
	}
?>