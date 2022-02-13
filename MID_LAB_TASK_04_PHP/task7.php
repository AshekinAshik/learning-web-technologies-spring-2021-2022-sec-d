<?php

	echo "<table border='1'>
			<tr>
				<td>";
				for ($i=0; $i<3; $i++) {
					for ($j=0; $j<=$i; $j++) {
						echo "*";
					}
					echo "<br>";
				}
				echo "</td>";

			echo "<td>";
					for ($i=3; $i>0; $i--) {
						for ($j=1; $j<=$i; $j++) {
							echo $j;
						}
						echo "<br>";
					}
					echo "</td>";

			echo "<td>";
					$alph = 'A';
					for ($i=1; $i<=3; $i++) {
						for ($j=1; $j<=$i; $j++) {
							echo $alph++;
						}
						echo "<br>";
					}
					echo "</td>
			</tr>";

	echo "</table>";
	
?>