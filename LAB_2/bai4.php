

<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>


<?php
$m = rand(2,5);
$n = rand(2,5);

	echo "<h2>Ma trận $m x $n ngẫu nhiên</h2>";
	echo "<table style='width:100%'>";
	for ($j=1; $j<=$m; $j++)
		{
			echo "<tr>";
			for ($i=1; $i<=$n; $i++) 
			{ 
				$a=rand(-100,100);
				// echo rand(-100,100).' | ';
				echo "<td> $a </td>";
			}
			echo "</tr>";	
		}
	echo "</table>";

?>


</body>
</html>