<!DOCTYPE html>
<html>

<head>
  <title>Benvenuto - Rewadd</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="icon" href="../img/logoico.png">
  
  <style type="text/css">
  .esp{
	
	background-color: #FFB74D;
	color: white;	  
  }
  .esp:hover{
	  background-color: #F57C00;
	  color:white;
  }
  .reg{
	  
	 background-color: #8BC34A; 
	 color:white; 	 
  }
  .reg:hover{
	  background-color: #33691E;
	  color:white;
	  
  }
  </style>
</head>

<body style="overflow-x: hidden">
<?php
	
	if($_SESSION['loggato'] == true){
		header("location: https://rewadd.altervista.org/r/r.php");
	}
?>
  <nav class="navbar navbar-expand-md navbar-dark" style="background-color:black">
    <div class="container">
      <a class="navbar-brand" href="https://rewadd.altervista.org" style="font-size: 35px; font-family: 'Lobster'">Rewadd</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="btn-group">
              <button class="btn navbar-btn ml-2 text-white btn-danger" style="cursor: pointer;" data-toggle="dropdown"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Accedi</button>
              <div class="dropdown-menu text-left">
                <form action="" method="post">
                  <div class="form-control" style="border: none;"> 
					<label>Email</label>
                    <input type="email" name="email" placeholder="provaemail@dominio.com"><br>
					<label>Password</label>
                    <input type="password" name="password" placeholder="*****"><br><br>
					<button type="submit" name="accedi" style="cursor: pointer;" class="btn btn-danger text-center">Accedi</button><br><br>
					<?php
					include "operation/cdb.php";
					if(isset($_POST['accedi'])){
						
						$email = $_POST['email'];
						$password = $_POST['password'];
						if(empty($email) && empty($password)){
							echo "I campi sono vuoti";
						}elseif(empty($email)){
							echo "Il campo email è vuoto";
						}elseif(empty($password)){
							echo "  Il campo password è vuoto";
						}else{
						$login = mysqli_query($db, "SELECT * FROM Utenti WHERE Email = '".$email."' AND Password = '".md5($password)."'")or die(mysqli_error($db));
						if(mysqli_num_rows($login) === 1){
							$row = mysqli_fetch_array($login);
							if($row['Attivo'] == 1){
							session_start();
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
							header("location: https://rewadd.altervista.org/r/r.php");
							}else{
								echo "Attiva il tuo account prima di accedere";
							}
						}else{
							echo "Non esiste nessun account con queste credenziali";
						}
						}
					}
					
					?>
					<br><br><a href="operation/lostpass.php">Hai dimenticato la password? </a><br>Sei nuovo? <a href="sign.php"> Registrati ora.</a><br>
				  </div>
                </form>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="info.php"><i class="fa d-inline fa-lg fa-info-circle"></i> Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact"><i class="fa d-inline fa-lg fa-envelope-o"></i> Contattaci</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center opaque-overlay" style="background-image: url(&quot;https://rewadd.altervista.org/img/intro.jpg&quot;);">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12 text-white">
          <h1 class="display-3 mb-4">Felice di conoscerti</h1>
          <p class="lead mb-5">Rewadd ha come scopo principale quello di aiutare l'utente
            <br> a scegliere il prodotto giusto adatto alle sue esigenze e ai suoi budget.</p>
          <a href="explore.php" class="btn btn-lg mx-1 esp">Esplora</a>
          <a href="sign.php" class="btn btn-lg mx-1 reg">Registrati</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
  <div class="container">
    <h1 class="text-center"> Servizi </h1>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center"><i class="fa fa fa-commenting"></i> Recensioni</h4>
            <h6 class="text-muted">Presto disponibile</h6>
            <p class=" p-y-1">Trovi le caratteristiche, le specifiche e le recensioni degli utenti sui prodotti.</p>
          </div>
        </div>
		</div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center"><i class="fa fa fa-newspaper-o"></i> News</h4>
            <h6 class="text-muted">Presto disponibile</h6>
            <p class=" p-y-1">Trovi le novità più recenti di tutti i settori tecnologici.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center"><i class="fa fa fa-comments"></i> Domanda e risposta</h4>
            <h6 class="text-muted">Presto disponibile</h6>
            <p class=" p-y-1">Se hai qualche dubbio riguardo qualche prodotto, fai una domanda e gli utenti ti risponderanno.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center"><i class="fa fa fa-shopping-cart"></i> User Store</h4>
            <h6 class="text-muted">Presto disponibile</h6>
            <p class=" p-y-1">Un e-commerce basato sulla vendita di prodotti degli utenti.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center"><i class="fa fa fa-align-left"></i> Sondaggi</h4>
            <h6 class="text-muted">Presto disponibile</h6>
            <p class=" p-y-1">Fai un sondaggio sui prodotti da te scelti e guarda cosa preferiscono gli utenti.</p>
          </div>
        </div>
      </div>
    </div>
	</div>
  </div>
  <div class="py-5" style="background-image: url(&quot;https://rewadd.altervista.org/img/contattaci.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="align-self-center col-md-6 text-white">
          <h1 id="contact" class="text-center text-md-left display-3">Contattaci</h1>
          <p class="lead">Per qualunque dubbio non esitare a contattarci, ti risponderemo al più presto.</p>
        </div>
        <div class="col-md-6" id="book">
          <div class="card">
            <div class="card-body p-5">
              <h3 class="pb-3">Compila il form</h3>
              <form action="" method="post" id="form">
                <div class="form-group"> <label>Nome</label>
                  <input type="text" name="nome" class="form-control" placeholder="es. Cosimo" maxlength="50" required> </div>
                <div class="form-group"> <label>Cognome</label>
                  <input type="text" name="cognome" class="form-control" placeholder="es. Veriello" maxlength="50" required> </div>
                <div class="form-group"> <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="es. provaemail@dominio.com" maxlength="100" required> </div>
                <div class="form-group"> <label>Oggetto</label>
                  <input type="text" name="oggetto" class="form-control" placeholder="es. Informazioni" maxlength="50" required> </div> 
				  <label>Messaggio</label> 
				  <textarea type="email" name="corpo" class="form-control" placeholder="150 caratteri disponibili" maxlength="150" required></textarea>
                <button type="submit" name="invia"class="btn mt-2 btn-outline-dark" style="background-color: orange;">Invia</button>
              </form>
			  <?php
			  
				if(isset($_POST['invia'])){
				$nome_mittente = $_POST['nome']." ".$_POST['cognome'];
				$mail_mittente = $_POST['email'];
				$mail_destinatario = "rewaddofficial@gmail.com";

				// definisco il subject ed il body della mail
				$mail_oggetto = $_POST['oggetto'];
				$mail_corpo = $_POST['corpo'];

				// aggiusto un po' le intestazioni della mail
				// E' in questa sezione che deve essere definito il mittente (From)
				// ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
				$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
				$mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
				$mail_headers .= "X-Mailer: PHP/" . phpversion();
				if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers)){
					
				  echo "<label style=\"color:green;\">Messaggio inviato con successo, grazie per averci contattato</label>";
				}else{
				  echo "<label style=\"color: red;\">Si è presentato un problema nell'invio, riprova più tardi per favore</label>";
				}
				header("location: https://rewadd.altervista.org/#form");
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
          <p>© Copyright 2017 Rewadd - Tutti i diritti riservati. | <a href="condizioni.php">Termini e condizioni</a> | <a href="policy.php">Privacy Policy</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>