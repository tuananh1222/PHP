<?php 
	$servername = "localhost";
	$username_sql = "root";
	$password_sql = "";
	$dbname = "qlsv";
	$conn = mysqli_connect($servername, $username_sql, $password_sql, $dbname);
	mysqli_query($conn, "set character set 'utf8'"); 
	$sql_select1 ="";
	if (isset($POST['submit'])) {
		$txtSearch = isset($_POST['search'])?($_POST['search']):"";
		$sql_select1 = "SELECT * FROM sinhvien, class WHERE sinhvien.id = class.id and name like %". $txtSearch. "%";
	} else {
		$sql_select1 = "SELECT * FROM sinhvien, class WHERE sinhvien.id = class.id";
	}
	
	$result1 = $conn->query($sql_select1);
	header('Location: ConnectData.php');
	mysqli_close($conn);

 ?>