<?php 
	include "headerview.php";
	include "navbarview.php";
?>
	<head>
	
		<h1 class="ContactviewAll" >COGiP: <?= ucfirst($url)?></h1>

		<table>
			<caption>Tous les <?= $url ?></caption>
			<thead>
				<th>Nom</th>
				<th>Télephone</th>
				<th>Email</th>
				<th>Compagnie</th>
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
