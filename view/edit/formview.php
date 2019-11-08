<body>
	<section class="nav-bar">
			<img class="nav-img" src= "./cogip2000small.jpeg" />
			<ul class="list">
				<li><a href="#">Compagnie</a></li>
				<li><a href="#">Factures</a></li>
				<li><a href="#">Conctats</a></li>
				<li><a href="#">Clients</a></li>
				<li><a href="#">Fourniseurs</a></li>
			</ul>
		</section>

    <main class ="bodyForm">
		<h1 class="hform" >Creations d'un nouveaux contacts</h1>
<?php
switch($create){
	case "contact":
		echo' 
		<form class="form1" action="" method="POST">
            <label for="firstname">Nom</label>
            <input type="text" id="firstname" class="firstname" name="firstname">
            <label for="lastname">Prénoms</label>
            <input type="text" id="lastname" class="lastname" name="lastname">
            <label for="telephone">téléphone</label>
            <input type="text" class="telephone" name="telephone">
            <label for="mail">Email</label>
            <input type="mail" id="mail" class="mail" name="email"> 
			<select name="company">
				<option value="1">Telenet</option>
				<option value="2">Belgacom</option>
				<option value="3">ElectricPower</option>
				<option value="Ravigna">Ravigna</option>
				<option value="Jouets Jean-Michel">Jouets Jean-Michel</option>
				<option value="Telenet">Telenet</option>
			</select>
			<button type="submit" name="envoi">Envoi</button>
        </form>';
		break;
	case "company":
		echo'
		<form class="form1" action="" method="POST">
            <label for="name">Nom</label>
            <input type="text" id="firstname" class="firstname" name="firstname">
            <label for="vat">TVA</label>
            <input type="text" id="vat" class="vat" name="vat">
           	<select name="country">
				<option value="Belgique">Belgique<option>
				<option value="France">France<option>
			</select>
			<select name="companyType">
				<option value="1">Fourniseurs</option>
				<option value="2">Clients</option>
			</select>
			<button type="submit" name="envoi">Envoi</button>
        </form>';
		break;
	case "invoice":
		echo'
		<form class="form1" action="" method="POST">
            <label for="number">N°Factures</label>
            <input type="text" id="number" class="number" value="F'.date("Ymd").'-"name="number">
			<select name="companyId">';
			foreach($companyAll  as $company) {
				foreach($company as $value){
					echo" <option value='$value'>$value</option>";
				echo $value;
				}
			}
		echo'</select>
			<select name="ConctatId">';
			foreach($contactAll as $contact){
				foreach($contact as $value){
				echo"<option value='$value'>$value</option>";
			}
		}
		echo '</select><button type="submit" name="envoi">Envoi</button>
        </form>';
		break;
	case "user":
		echo'
		<form class="form1" action="" method="POST">
            <label for="username">User</label>
            <input type="text" id="username" class="username" name="username">
            <label for="password">Password</label>
            <input type="password" id="password" class="password" name="password">
            <select name="type">
				<option value="winner">Winner</option>
				<option value="admin">Admin</option>
				<option value="regular">Regular</option>
			</select>';

}
?>
    </main>
</body>
