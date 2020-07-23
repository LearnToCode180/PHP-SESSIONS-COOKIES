<?php 

session_start();

if(!isset($_SESSION['email'])){
	header('location:login.php');
}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
	<link rel="stylesheet" href="CSS/profil.css">
</head>

<body>

	<h1>Page 1</h1>

	<h2>
		Bonjour Monsieur 
		<span style="color: red;"> 
			<?php 
				//echo $_SESSION['nom'] . ' ' . $_SESSION['prenom']; 
			?> 
		</span>
	</h2>


	<ul>
		<li><a href="page1.php" style="background-color: blue; color: white;">Page 1</a></li>
		<li><a href="page2.php">Page 2</a></li>
		<li><a href="page3.php">Page 3</a></li>
	</ul>

	<a href="deconnexion.php" class="deconnexion">Se Deconnecter</a>
	
</body>
</html>

<?php  } ?>

