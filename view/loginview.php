<?php include headerview.php ?>
<form id="loginform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="username">Votre nom</label>
<input type="text" name="username" id="username">
<!-- variable php d'erreur-->
<label for="password">Votre mot de passe</label>
<input type="password" name="password" id="password">
<!--variable php d'erreur -->
<input type="submit" value="Connexion" name="submit">
</form>

<?php include footerview.php ?>
