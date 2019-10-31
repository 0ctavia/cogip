<?php include 'headerview.php' ?>
<form id="loginform" action="" method="post">
<label for="username">Votre nom</label>
<input type="text" name="username" id="username">
<span class="error"><?php echo $usernameError ?></span>
<label for="password">Votre mot de passe</label>
<input type="password" name="password" id="password">
<span class="error"><?php echo $passwordError ?></span>
<input type="submit" value="Connexion" name="submit">
</form>

<?php include 'footerview.php' ?>
