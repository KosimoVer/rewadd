<?php

$db=mysqli_connect('localhost', 'rewadd', '', 'my_rewadd');

if(mysqli_error()){
	echo "Non riesco a connettermi al database, riprova più tardi.";
	
}

?>