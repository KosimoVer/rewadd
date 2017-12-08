<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="icon" href="img\logofb.png"> </head>

<body style="overflow-x: hidden">
  <nav class="navbar navbar-expand-md navbar-dark" style="background-color:black">
    <div class="container">
      <a class="navbar-brand" href="https://rewadd.altervista.org" style="font-size: 35px; font-family: 'Lobster'">Rewadd</a>
    </div>
  </nav>
  <?php
  include "cdb.php";
  session_start();
	/* if($_SESSION['visita'] == true && $_SESSION['check'] == false){
    header("location: https://rewadd.altervista.org");
    }elseif($_SESSION['loggato'] == true){header("location: https://rewadd.altervista.org/r/r.php");} */
  
  ?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img class="img-fluid d-block mx-auto" src="checkemail.png">
          <br>
          <h1 class="text-center hidden-xs"> Benvenuto/a,<?php echo " ".$_SESSION['nome']; ?></h1>
          <br>
          <p style="font-size: 20px" class="text-center"> Grazie per esserti iscritto, controlla l'email nella tua casella postale per confermare il tuo account.</p>
        <a class="btn btn-danger" style="margin: 0 auto;display: block;"href="../sign.php">Confermato? Accedi</a>
        </div>
      </div>
    </div>
  </div>
  <?php
	$nome_mittente = "Rewadd";
	$mail_mittente = "info@rewadd.com";
	$mail_destinatario = $_SESSION['email'];
	$link = "https://rewadd.altervista.org/operation/confirm.php?email=".$_SESSION['email']."&codice=".$_SESSION['codice'];

	// definisco il subject ed il body della mail
	$mail_oggetto = "Conferma il tuo Account";
	$mail_corpo = "Ciao ".$nome.", <br>Grazie per esserti iscritto alla piattaforma, per accedere devi confermare l'account
	cliccando nel link qui di seguito<br>".$link."<br>Qui trovi il riepilogo dei tuoi dati<br>
	Nome e Cognome : ".$_SESSION['nome']." ".$_SESSION['cognome']."<br>
	Email : ".$_SESSION['email']."<br>
	Data di nascita: ".$_SESSION['nascita']."<br>
	Password : ***********<br>
	Sesso : ".$_SESSION['sex']."<br>
	Telefono : ".$_SESSION['telefono']."<br>
	Buona navigazione.<br>
	Il team di Rewadd
	";

	// aggiusto un po' le intestazioni della mail
	// E' in questa sezione che deve essere definito il mittente (From)
	// ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
	$mail_headers = "From: " .  $nome_mittente . ">\r\n";
	$mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
	$mail_headers .= "Rewadd";
	$mail_headers .= "MIME-Version: 1.0\n";
	$header .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
	$header .= "Content-Transfer-Encoding: 7bit\n\n";
	
	mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers);
?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>