<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form insert</title>
	<style type="text/css">
		#head{
			font-size: 30px;
			color: red;
		}
		table{
			width: 300px;
			height: 300px;
		}
	</style>
</head>
<?php 
 	
	$name = isset($_POST['name'])?$_POST['name']:"";
	$birthday = isset($_POST['birthday'])?$_POST['birthday']:"";
	$sex = isset($_POST['sex'])?$_POST['sex']:"";
	$id = isset($_POST['id'])?$_POST['id']:"";

	$servername = "localhost";
	$username_sql = "root";
	$password_sql = "";
	$dbname = "qlsv";

	// Create connection
	$conn = mysqli_connect($servername, $username_sql, $password_sql, $dbname);
	mysqli_query($conn, "set character set 'utf8'");   
	
	$sql1 = "INSERT INTO sinhvien(id_st, id, name, birthday, sex)
	VALUES (null,'$id','$name', '$birthday', '$sex')";
	

	if ($name != ""  && $birthday != "" && $sex != "") {
		mysqli_query($conn, $sql1);
		echo '<script type="text/javascript">alert("Insert ")</script>';
	}else{
		echo '<script type="text/javascript">alert("You do not fill")</script>';
	}
	
	 mysqli_close($conn);
 
 ?>
<body>
	<form action="#" method="post">
		<table border="1" align="center">
			<tr>
				<td colspan="4" align="center" id="head">Student Information</td>
			</tr>
			<tr>
				<td>Id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Birthday</td>
				<td><input type="date" name="birthday"></td>
			</tr>
			<tr>
				<td>Sex</td>
				<td><input type="text" name="sex"></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<input type="submit" name="submit" value="Insert">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>

			
		</table>
	</form>
	<a href="ConnectData.php">Return</a>
</body>
</html>		