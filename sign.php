<!DOCTYPE html>
<html>

<head>
  <title>Registrati - Rewadd</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link rel="icon" href="../img/logoico.png">
  </head>

<body style="overflow-x: hidden">
  <nav class="navbar navbar-expand-md navbar-dark" style="background-color:black">
    <div class="container">
      <a class="navbar-brand" href="https://rewadd.altervista.org" style="font-size: 35px; font-family: 'Lobster'">Rewadd</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="https://rewadd.altervista.org"><i class="fa fa fa-sitemap"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="info.php"><i class="fa d-inline fa-lg fa-info-circle"></i> Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://rewadd.altervista.org/#contact"><i class="fa d-inline fa-lg fa-envelope-o"></i> Contattaci</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5" style="background-image: url(&quot;../img/sfondo.png&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-6" id="book">
          <div class="card">
            <div class="card-body p-5">
              <h3 class="pb-3">Registrati</h3>
              <form action="" method="post">
                <div class="form-group"> <label>Nome*</label>
                  <input type="text" class="form-control" placeholder="es. Cosimo" name="nome" maxlength="50" required> </div>
                <div class="form-group"> <label>Cognome*</label>
                  <input type="text" class="form-control" placeholder="es. Veriello" name="cognome" maxlength="50" required> </div>
                <div class="form-group"> <label>Email*</label>
                  <input type="email" class="form-control" placeholder="es. provaemail@dominio.com" name="email" maxlength="50" required> </div>
                <div class="form-group"> <label>Password*</label>
                  <input type="password" name="password" class="form-control" placeholder="*****" maxlength="16" required> </div>
                <div class="form-group"> <label>Conferma Password*</label>
                  <input type="password" name="confpass" class="form-control" placeholder="*****" maxlength="16" required> </div>
                <div class="form-group"> <label>Data di nascita*</label><br>
                  <select name="giorno" required>
				  <?php
				  for($i = 1; $i < 32; $i++){
					 if(strlen($i) === 1){
						 ?>
						 <option value="<?php echo htmlspecialchars($i); ?>">0<?php echo htmlspecialchars($i) ?></option>
						 <?php
					 }else{
						 ?>
						 <option value="<?php echo htmlspecialchars($i); ?>"><?php echo htmlspecialchars($i) ?></option>
						<?php
					 }
				  }
				  ?>
				  </select>
				  <select name="mese" required>
				  <?php
				  for($i = 1; $i < 13; $i++){
					  if(strlen($i) === 1){
						  ?>
						  <option value="<?php echo htmlspecialchars($i); ?>">0<?php echo htmlspecialchars($i); ?></option>
						  <?php
					  }else{
						  ?>
						  <option value="<?php echo htmlspecialchars($i); ?>"><?php echo htmlspecialchars($i); ?></option>
						  <?php
					  }
				  }
				  ?>
				  </select>
				  <select name="anno" required>
					<?php 
				  for ($i = 2003; $i > 1952; $i--){
					
					?>
				  <option value="<?php echo htmlspecialchars($i); ?>"><?php echo htmlspecialchars($i); ?></option>
					<?php						
				  }
					?>
				  
				  </select><br><br>
				 </div>
                <div class="form-group"> <label>Sesso*</label> <select name="sex" required>
                    <option value="maschio">Maschio</option>
                    <option value="femmina">Femmina</option>
                    <option value="altro">Altro</option>
                  </select> </div>
                <div class="form-group"> <label>Numero di telefono</label><br>
                  <label>+39</label><input type="tel" name="telefono" class="form-control" placeholder="0219384391" maxlength="10"> </div>
                <button type="submit" name="reg" onClick="function()" style="cursor: pointer;"class="btn mt-2 btn-success">Registrati</button>
              </form>
			  <?php
			  
			  include "operation/cdb.php";
			  include "operation/function.php";
			  
			  if(isset($_POST['reg'])){
				  session_start();
				  if($_POST['password'] === $_POST['confpass']){ //controllo sulle password
					  if(preg_match('/^[a-zA-Z]+$/', $_POST['nome'])){ //controllo sul nome
					  $nome = $_POST['nome'];
					  if(preg_match('/^[a-zA-Z]+$/', $_POST['cognome'])){ // controllo sul cognome
						  $cognome = $_POST['cognome'];
						  $checkemail = mysqli_query($db, "SELECT Email FROM Utente WHERE Email = '".$email."'");
						  if(mysqli_num_rows($checkemail) === 0){
							$email = $_POST['email'];
							$password = $_POST['password'];
							$giorno = $_POST['giorno'];
							$mese = $_POST['mese'];
							$anno = $_POST['anno'];
							if(checkdate($mese, $giorno, $anno)){
								$nascita = $giorno."/".$mese."/".$anno;
								$sex = $_POST['sex'];
							if(strlen($_POST['telefono'] < 10)){
								echo "Numero di telefono non valido";
							}elseif(!preg_match('/^[0-9]+S/', $_POST['telefono'])){
								echo "Il numero di telefono può contenere solo numeri";
							}else{
								$telefono = $_POST['telefono'];
								$codice = rand();
								$img = "https://rewadd.altervista.org/account/imgprofile/default_img.png";
								$query = mysqli_query($db, "INSERT INTO Utenti (Nome, Cognome, Email, Password, Nascita, Sesso, Telefono, Attivo, Codice, Img_profile, Newsletter)
								VALUES ('".$nome."', '".$cognome."', '".$email."', '".$password."', '".$nascita."', '".$sex."', '".$telefono."', '0', '".$img."', '0')")or die(mysqli_error($db));
								if($query){
									echo "<script>window.location='https://rewadd.altervista.org/operation/checkemail.php'</script>";	
								}
							}	
							}else{
								echo "La data non è corretta";
							}
							}else{
								"L'email è stata già utilizzata";
							}
						  
					  }else{
						  echo "<label style=\"color: red;\">Non sono consentiti caratteri speciali nel Cognome</label>";
					  }
					  }else{
						  echo "<label style=\"color: red;\">Non sono consentiti caratteri speciali nel Nome</label>";
					  }
				  }else{
					  echo "<label style=\"color: red;\">Le password non coincidono</label>";
				  }
			  }
			  
			  ?>
            </div>
          </div>
        </div>
        <div class="col-md-6" id="book">
          <div class="card">
            <div class="card-body p-5">
			<h3 class="pb-3">Accedi</h3>
              <form action="" method="post">
                <div class="form-group"> <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="es. provaemail@dominio.com"> </div>
                <div class="form-group"> <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="*****"> </div>
                <button name="accedi" type="submit" style="cursor: pointer" class="btn mt-2 btn-danger">Accedi</button>
              </form>
			  <?php
					include "operation/cdb.php";
					if(isset($_POST['accedi'])){
						session_start();
						$email = $_POST['email'];
						$password = $_POST['password'];
						if(empty($email) && empty($password)){
							echo "I campi sono vuoti";
						}elseif(empty($email)){
							echo "Il campo email è vuoto";
						}elseif(empty($password)){
							echo "Il campo password è vuoto";
						}
						$login = mysqli_query($db, "SELECT * FROM Utenti WHERE Email = '".$email."' AND Password = '".md5($password)."'")or die(mysqli_error($db));
						if(mysqli_num_rows($login) === 1){
							$row = mysqli_fetch_array($login);
							if($row['Attivo'] == 1){
							$_SESSION['email'] = $row['Email'];
							$_SESSION['nome'] = $row['Nome'];;
							$_SESSION['cognome'] = $row['Cognome'];
							$_SESSION['password'] = $row['Password'];
							$_SESSION['nascita'] = $row['Nascita'];
							$_SESSION['telefono'] = $row['Telefono'];
							$_SESSION['sex'] = $row['Sesso'];
							$_SESSION['img'] = $row['Img_profile'];
							$_SESSION['visita'] = false;
							$_SESSION['check'] = true;
							$_SESSION['loggato'] = true;
							echo "<script>window.location='https://rewadd.altervista.org/r/r.php'</script>";
							}else{
								echo "<br><label style=\"color:red;\">Attiva il tuo account prima di accedere</label>";
							}
						}else{
							echo "Non esiste nessun account con queste credenziali.";
						}
								
					}
					?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white" style="background-color: black">
    <div class="container">
      <div class="row">
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.facebook.com" target="_blank"><i class="fa fa-fw fa-facebook fa-3x text-white"></i></a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://twitter.com" target="_blank"><i class="fa fa-fw fa-twitter fa-3x text-white"></i></a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.instagram.com" target="_blank"><i class="fa fa-fw fa-instagram text-white fa-3x"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-left">
          <p>© Copyright 2017 Rewadd - Tutti i diritti riservati. |
            <a href="condizioni.php">Termini e condizioni</a> |
            <a href="policy.php">Privacy Policy</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>