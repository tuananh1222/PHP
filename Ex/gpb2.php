<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kết quả</title>
</head>
<body>
	<?php  
		$hsa = isset($_POST['hsa']) ? $_POST['hsa']:"";
		$hsb = isset($_POST['hsb']) ? $_POST['hsb']:"";
		$hsc = isset($_POST['hsc']) ? $_POST['hsc']:"";

		if ($hsa == 0) {
			if($hsb == 0){
				if ($hsc == 0) {
					echo "Phương trình vô số nghiệm";
				}
				else echo "Phương trình vô nghiệm";
			}
			else {
				echo "Phương trình có nghiệm duy nhất là: x = ".(-$hsc/$hsb);
		}}
		else{
				$denta = pow($hsb, 2) - 4 * $hsa *$hsc;
				if ($denta == 0) {
					echo "Phương trình có nghiệm kép: x = ". (-$hsb/2 * $hsa);
				} else if($denta < 0){
					echo "Phương trình vô nghiệm";
				}else{
					echo "Phương trình có 2 nghiệm phân biệt: "."<br>";
					$x1 = (-$hsb - sqrt($denta))/(2*$hsa);
					$x2 = (-$hsb + sqrt($denta))/(2*$hsa);
					echo "x1 = ". $x1."<br>";
					echo "x2 = ". $x2;
				}
				
			}
		
		
	?>
</body>
</html>					