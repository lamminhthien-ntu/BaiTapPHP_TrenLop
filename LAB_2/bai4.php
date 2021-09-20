<?php

$m = rand(2,5);
$n = rand(2,5);



	for ($j=1; $j<=$m; $j++)
		{

			for ($i=1; $i<=$n; $i++) 
			{ 
				echo rand(-100,100).' | ';
			}
			echo '<br>';
		}

?>