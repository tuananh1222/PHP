<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$classname = isset($_POST['classname'])?$_POST['classname']:"";

		$servername = "localhost";
		$username_sql = "root";
		$password_sql = "";
		$dbname = "qlsv";

		// Create connection
		$conn = mysqli_connect($servername, $username_sql, $password_sql, $dbname);
		mysqli_query($conn, "set character set 'utf8'");   
		$sql = "INSERT INTO class(id, class_name)
		VALUES (null,'$classname')";
		if ($classname != "") {
		mysqli_query($conn, $sql);
		echo '<script type="text/javascript">alert("Insert ")</script>';
		}else{
			echo '<script type="text/javascript">alert("You do not fill")</script>';
		}
		
		 mysqli_close($conn);
	 ?>
	<form action="#" method="post">
		<table>
			<tr>
				<td>ClassName</td>
				<td><input type="text" name="classname"><td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="INSERT"><td>
			</tr>
		</table>
	</form>
	<a href="insertstudent.php">InsertST</a>
</body>
</html>