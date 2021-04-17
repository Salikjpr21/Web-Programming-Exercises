<html>
	<body>

	<?php  
	function buatBintang($n){
		echo "<pre>";
	for($i=0; $i<=$n; $i++){
		for($j=$n-$i; $j>0; $j--){
				echo "*";
		}
			echo "\n";
	}
		echo "</pre>";
	}

	buatBintang(4);
	buatBintang(5);

	?>  
	</body>
</html>