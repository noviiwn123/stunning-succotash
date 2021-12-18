<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sistemparkir";

	// membuat koneksi
	$conn = new mysqli($servername, $username, $password, $dbname);
	// mengecek koneksi
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
