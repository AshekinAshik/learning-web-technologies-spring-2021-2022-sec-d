<?php

	$storage = [
		[1, 2, 3, 'A'],
		[1, 2, 'B', 'C'],
		[1, 'D', 'E', 'F']
	];

	echo "<table border='1'>
			<tr>
				<td>";
					for ($i=0; $i<=2; $i++) {
						for ($j=0; $j<=2-$i; $j++) {
							echo $storage[$i][$j]." ";
						}
						echo "<br>";
					}
					echo "</td>";

			echo "<td>";
					$alph = 'A';
					for ($i=0; $i<=2; $i++) {
						for ($j=3-$i; $j<=3; $j++) {
							echo $storage[$i][$j]." ";
						}
						echo "<br>";
					}
					echo "</td>
			</tr>";

	echo "</table>";

?>