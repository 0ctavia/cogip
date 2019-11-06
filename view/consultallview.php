<?php 
	include "headerview.php";
	include "navbarview.php";
?>
	<head>
	
		<h1 class="ContactviewAll" >COGiP: <?= ucfirst($choice)?></h1>

		<table>
			<caption>Tous les <?= $choice ?></caption>
			<thead>
				<?php
					addColumn($list);
				?>
				<!-- <th>Nom</th>
				<th>Télephone</th>
				<th>Email</th>
				<th>Compagnie</th> -->
			</thead>
			<tbody>
				<?php 
					foreach($list as $company){
								echo "<tr>";
								foreach ($company as $key => $value) {
									if ($key != 'id') echo "<td>$value</td>";
								}
								echo "</tr>";
					}?>	
			</tbody>
	
		</table>
