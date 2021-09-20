<?php

	

	for ($j=1; $j <= 10 ; $j++)
		{
			echo '<br> Bảng cửu chương '.$j.'<br>';
			for ($i=1; $i <= 10 ; $i++) 
			{ 
				echo $j.'*'.$i.'='.$j*$i.'<br>';
			}
		}

?>