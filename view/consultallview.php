<?php 
	include "headerview.php";
	include "navbarview.php";
?>	
		<h1 class="ContactviewAll" >COGiP: <?= ucfirst($choice)?></h1>

		<table>
			<caption>Tous les <?= $choice ?></caption>
			<thead>
				<?php
					addColumn($list);
				?>
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
<?php include "footerview.php"; ?>