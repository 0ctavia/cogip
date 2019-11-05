<?php include "loginview.php"?>
<main id="main">
			<section class="text">
				<h1>Bienvenue $username</h1>
				<p>
					Vous vous trouvez dans l'interface de la banque de données de la COGIP, 
					consultez les éléments les plus récents ci-dessous ou utilisez le menu
					ci dessus pour accéder à une liste de tous les éléments.
				</p>
			</section>
			<section class="admin">
				<img class="acceuil-img" src="assets/images/ranu.jpeg"/>
				<a type="submit" class="lien-admin" href="#">Module administrateur</a>
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
							<tr>
								<td></td>
								<td></td>
								<td></td>
							</tr>
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
							<tr>
								<td></td>
								<td></td>
							</tr>
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
							<th>numéro factures</th>
							<th>société</th>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</section>
			</section>
		</main>
	</body>
</html>	
