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
				<table class="tabFactures">
					<thead>
						<tr>
							<th colspan="2">Factures</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>numéro facture</td>
							<td>date</td>
							<td>société</td>
					    </tr>
					</tbody>
				</table>
				<table class="tabCompagnie">
					<thead>
						<tr>
							<th colspan="2">Compagnie</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>nom de la société</td>
							<td>Type</td>
					    </tr>
					</tbody>
				</table>
				<table class="tabContacts">
					<thead>
						<tr>
							<th colspan="2">Conctats</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Nom</td>
							<td>prénom</td>
							<td>email</td>
							<td>numéro factures</td>
							<td>société</td>
					    </tr>
					</tbody>
				</table>
			</section>
		</main>
	</body>
</html>

