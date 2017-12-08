<?php
include "cdb.php";
session_start();
$user = mysqli_query($db, "UPDATE Utenti SET Attivo = 1 WHERE Email=".$_SESSION['email']."AND Codice=".$_SESSION['codice']);
if($user){
	header("location: checkemail.php");
}else{
	echo "Ci sono alcuni problemi, riprova più tardi";
}


?>