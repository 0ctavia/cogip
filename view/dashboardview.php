<?php 
	include "headerview.php";
	include "navbarview.php";
?>
<main id="main">
	<section class="text">
		<h1>Administration</h1>
		<p>
            <?php echo $_SESSION['username']; ?>, vous êtes un <?php echo $_SESSION['mode']; ?>.
			Vous vous trouvez dans l'interface administrative de la COGIP, 
			consultez les éléments les plus récents ci-dessous pour créer, modifier, supprimer ou utilisez le menu
			ci dessus pour accéder à une liste de tous les éléments et quitter cette interface.
		</p>
	</section>
	<section>
		<button type="submit">nouvelle facture</button>
		<button type="submit">nouvelle compagnie</button>
		<button type="submit">nouveau contact</button>
		<?php
			if ($_SESSION['mode'] == 'winner') { ?>
				<button type="submit">nouveau utilisateur</button>
			<?php }
			
		?>
	</section>
			
	<section class="tableaux">
		<section class="tabFactures">	
			<table>
				<caption>Factures</caption>
				<thead>
					<tr>
						<th>numéro facture</th>
						<th>date</th>
						<th>société</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($invoiceList as $invoice){
						echo "<tr>";
						foreach($invoice as $key => $value){

							if ($key != 'id') {
                                echo "<td>$value</td>";
                                
                            }
                        }
                        if ($_SESSION['mode'] == 'winner') {
                            echo "<td>edit</td>";
                            echo "<td>delete</td>";
                        }
                        echo '</tr>';
                        
					}?>
				</tbody>
			</table>
		</section>
		<section class="tabCompagnie">	
			<table>
				<caption>Compagnie</caption>
				<thead>	
					<tr>
						<th>nom de la société</th>
						<th>Type</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($companyList as $company){
						echo "<tr>";
						foreach ($company as $key => $value) {
							if ($key != 'id') echo "<td>$value</td>";
						}
						echo "</tr>";
					}?>

				</tbody>
			</table>
		</section>
		<section class="tabContacts">
			<table>
				<caption>Contacts</caption>
				<thead>
					<th>Nom</th>
					<th>prénom</th>
					<th>email</th>
					<th>société</th>
				</thead>
				<tbody>
					<?php foreach($contactList as $contact){
						echo "<tr>";
						foreach ($contact as $key => $value) {
							if ($key != 'id') echo "<td>$value</td>";
						}
						echo "</tr>";
					}?>
				</tbody>
			</table>
		</section>
	</section>
</main>

<?php include "footerview.php"; ?>
	
</html>	
