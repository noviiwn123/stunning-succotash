<?php
include 'conn.php';
 
		if(empty($_POST['IDParkir']) || empty($_POST['TglParkir']) || empty($_POST['JamMasuk']) 
			|| empty($_POST['JamKeluar']) || empty($_POST['JenisKendaraan']))
		{
		echo "<script>alert('Ada yg Masih Kosong!');history.go(-1);</script>";
		}
	else
	{
	$IDParkir = $_POST['IDParkir'];
	$TglParkir = $_POST['TglParkir'];
	$JamMasuk = $_POST['JamMasuk'];
	$JamKeluar = $_POST['JamKeluar'];
	$JenisKendaraan = $_POST['JenisKendaraan'];
	$Biaya = $_POST['Biaya'];
// hitung durasi dalam menit
$start = strtotime($JamMasuk);
$end   = strtotime($JamKeluar);

$duration  = ($end - $start) / 60; // dalam minutes

// ubah jadi jam dan menit
$hours   = ceil($duration / 60);
$minutes = ($duration % 60);

$JenisKendaraan = $_POST['JenisKendaraan'];
echo $JenisKendaraan;
if ($JenisKendaraan =='Motor'){
	$Biaya = $hours*2000;
}elseif ($JenisKendaraan =='Mobil'){
	$Biaya = $hours*3000;
}elseif ($JenisKendaraan =='Bis'){
	$Biaya = $hours*5000;
}elseif ($JenisKendaraan =='Travel'){
	$Biaya = $hours*4000;
}
		$sql = "UPDATE parkir SET IDParkir='$IDParkir', TglParkir='$TglParkir', 
		JamMasuk='$JamMasuk', JamKeluar='$JamKeluar', JenisKendaraan='$JenisKendaraan', Biaya='$Biaya' WHERE IDParkir='".$IDParkir."'";
        $result= $conn->query($sql);
        if($result)
        {
            header("location:parkir.php");
        }    
	}
?>