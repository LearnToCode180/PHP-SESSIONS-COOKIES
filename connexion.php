<?php  

session_start();

// $_SESSION['nom'] = $_POST['nom'];
// $_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['email'] = $_POST['email'];

if(isset($_POST['check'])){
	setcookie('email', $_SESSION['email'], time() + 365*24*3600, null, null, false, true);
	setcookie('password', $_POST['password'], time() + 365*24*3600, null, null, false, true);
}


header('location:profil.php');




?>