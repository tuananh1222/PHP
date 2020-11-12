<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kết quả</title>
</head>
<body>
	<?php
		$hsa = isset($_POST['hsa'])?$_POST['hsa']:"";
		$hsb = isset($_POST['hsb'])?$_POST['hsb']:"";
		if($hsa == 0  ){
			if($hsb == 0){
				echo'Phương trình có vô số nghiệm';
			}
			else echo'Phương trình vô nghiệm';
		}
		else{
			echo'Phương trình có nghiệm duy nhất: x = '. (-$hsb/$hsa);
		}			
	?>
</body>
</html>				