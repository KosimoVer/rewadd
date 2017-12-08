<!DOCTYPE html>
<html>

<head>
  <title>Rewadd - Recensioni</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="icon" href="../img/logoico.png">
  <style>
    .news {
      color: black;
    }

    .news:hover {
      background-color: #8BC34A;
      color: white;
    }

    .store {
      color: black;
    }

    .store:hover {
      background-color: #C62828;
      color: white;
    }

    .der {
      color: black;
    }

    .der:hover {
      background-color: #AD1457;
      color: white;
    }

    .son {
      color: black;
    }

    .son:hover {
      background-color: #FF4081;
      color: white;
    }
	.cate:hover{
		background-color:white;
	}
	.catvo{
		color:white;
	}
	.catvo:hover{
		color: black;
	}
  </style>
</head>

<body style="overflow-x: hidden">
  <nav class="navbar navbar-expand-md navbar-dark" style="background-color:black">
    <div class="container">
      <a class="navbar-brand" href="https://rewadd.altervista.org/r/r.php" style="font-size: 35px; font-family: 'Lobster'">Rewadd</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
		  <li class="nav-item"><a class="btn" href="account/profilo.php" style="color: white; font-size: 20px;" >Ciao,<?php 
				include "../operation/cdb.php";
				session_start();
				if($_SESSION['loggato'] == false){
					header("location: https://rewadd.altervista.org");
				}
				$_SESSION['visita'] = false;
				echo " ".$_SESSION['nome']." ".$_SESSION['cognome'].""; ?></li></a></li>
		<li><a class="btn btn-danger" href="../account/logout.php" style="color: white; font-size: 20px; width: 100px;" title="Esci"><i class="fa fa-sign-out"></i></a></li>
		</ul>
      </div>
    </div>
  </nav>
  <div class="py-5">
  <div class="row">
  <div class="col-md-7">
		<div class="card">
      <div class="card-body text-center">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link news" style="font-size: 20px" href="#"><b>News</b></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link store" style="font-size: 20px"><b>User Store</b></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link der" style="font-size: 20px"><b>Domanda e risposta</b></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link son" style="font-size: 20px"><b>Sondaggi</b></a>
          </li>
        </ul>
      </div>
    </div>
	</div>
	<div class="col-md-5">
	<form method="get" action="search.php" class="text-right" style="margin-top: 11px">
              <input type="search" style="width: 300px;" placeholder="Cerca qualcosa" class="text-left btn" name="cercato">
              <button type="submit" class="btn btn-warning" name="cerca" style="cursor: pointer;"> <i class="fa fa-search"></i></button>
            </form>
	</div>
	</div>
</div>	
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="background-color: #B71C1C">
            <div class="card-body">
              <h4 class="text-center" style="color: #white; font-size: 30px;"><strong>Ehi,<?php echo " ".$_SESSION['nome']; ?> </strong></h4>
              <p class=" p-y-1 text-center" style="font-size: 20px; color:white">Il Natale è alla porte <i style="color: green;" class="fa fa-tree"></i></p>
              <p style="color: white" class="text-center"> Non aver paura nello scegliere il regalo più adatto, noi siamo qui ad aiutarti ad acquistare quello migliore!</p>
              <div class="text-center"><a href="../esplora.php" class="btn btn-success">Dai uno sguardo</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="row">
      <div class="col-md-3 hidden-md" style="background-color: #212121; border-radius: 20px 20px 20px 20px">
        <h3 style="color: white"> Categorie </h3>
        <br>
        <ul style="list-style: none">
          <li class="cate">
            <a class="btn catvo" href="">Desktop</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Notebook</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Ultrabook</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Windows Phone</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Windows tablet</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Chromebook</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Android Tablet</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Android Smartphone</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Android Watch</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Macintosh</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Macbook</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Ipad</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Iphone</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Apple Watch</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Console</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Videogiochi</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Film</a>
          </li>
		  <li class="cate">
            <a class="btn catvo" href="">Serie-TV</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Libri</a>
          </li>
          <li class="cate">
            <a class="btn catvo" href="">Anime</a>
          </li>
        </ul>
      </div>
      <br>
      <div class="col-md-9">
        <h1> Nuovo arrivati </h1>
        <br>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/ZB0ctrVBgP8" frameborder="0" allowfullscreen=""></iframe>
        <hr>
        <nav class="text-center">
          <a class="btn btn-success" href="">Recensiscilo</a>
          <a class="btn btn-danger" href="">Cercalo nello User Store</a>
          <a class="btn btn-info" href="" style="color:white">Notizie</a>
          <a href="" class="btn btn-dark">Fai domanda</a>
          <a href="" class="btn btn-warning">Crea sondaggio</a>
          <hr>
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/ZB0ctrVBgP8" frameborder="0" allowfullscreen=""></iframe>
          <hr>
          <nav class="text-center">
            <a class="btn btn-success" href="">Recensiscilo</a>
            <a class="btn btn-danger" href="">Cercalo nello User Store</a>
            <a class="btn btn-info" href="" style="color:white">Notizie</a>
            <a href="" class="btn btn-dark">Fai domanda</a>
            <a href="" class="btn btn-warning">Crea sondaggio</a>
          </nav>
        </nav>
      </div>
    </div>
  </div>
  <h2> Nuove uscite </h2>
  <div class="py-5 text-center">
    <div class="row">
      <div class="col-md-3">
        <img src="logoico.png" width="150" height="150" class="mx-auto">
        <h5> Prodotto n.1 </h5>
        <p> Descrizione del prodotto...
          <br>
          <a href="">Per saperne di più</a>
        </p>
      </div>
      <div class="col-md-3">
        <img src="logoico.png" width="150" height="150" class="mx-auto">
        <h5> Prodotto n.1 </h5>
        <p> Descrizione del prodotto...
          <br>
          <a href="">Per saperne di più</a>
        </p>
      </div>
      <div class="col-md-3">
        <img src="logoico.png" width="150" height="150" class="mx-auto">
        <h5> Prodotto n.1 </h5>
        <p> Descrizione del prodotto...
          <br>
          <a href="">Per saperne di più</a>
        </p>
      </div>
      <div class="col-md-3">
        <img src="logoico.png" width="150" height="150" class="mx-auto">
        <h5> Prodotto n.1 </h5>
        <p> Descrizione del prodotto...
          <br>
          <a href="">Per saperne di più</a>
        </p>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="text-left"> Ultime uscite nelle sale </h2>
          <img src="logoico.png" width="">
          <img src="logoico.png" width="">
          <img src="logoico.png" width="">
          <img src="logoico.png" width="">
          <img src="logoico.png" width="">
          <img src="logoico.png" width=""> </div>
        <div class="col-md-6">
          <h2 class="text-left"> Ultime uscite videoludiche </h2>
          <img src="logoico.png" width="">
          <img src="logoico.png" width="">
          <img src="logoico.png" width="">
          <img src="logoico.png" width="">
          <img src="logoico.png" width="">
          <img src="logoico.png" width=""> </div>
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
</body>

</html>