<head>
<title>PG'Whiskas Community</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/general.css">
<script type="text/javascript" src="js/general.js"></script>
<?php
	  try
	  {
	    $bdd = new PDO('mysql:host=localhost;dbname=projetphp', 'root', '');
	  }
	  catch (Exception $e)
	  {
	    die('Erreur : ' . $e->getMessage());
	  }
	  session_start();
	  if(isset($_SESSION["id"]) && $_SESSION["id"]>0)
	  {
		header("location:profil.php");
		exit;
}
?>
</head>
<body>
<img src="">
<div id="header">
<a href="inscription.php" class="linktop">Inscription</a>
<a href="connexion.php" class="linktop">Connexion</a>
</div>
<?php include("lib/menu.php");?>

</body>