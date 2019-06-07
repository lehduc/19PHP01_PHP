<?php
$dem = 0;
	for ($x=1; $x <= 100 ; $x++) { 
		for ($y=1; $y <= 50 ; $y++) { 
			for ($z=1; $z <=20 ; $z++) { 
				if ($x * 10 + $y * 20 + $z * 50 == 1000){
					$dem++;
					echo "$dem	";
					echo "$x to 10k $y to 20k $z to 50k";
					echo "<br>";
				}
			}
		}
	}
?>	