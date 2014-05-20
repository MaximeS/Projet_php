<?php include("lib/header.php");?>

<body>
<div id="content">
	<div id="forform">
		<form class="forminscr" role="form" method="POST" >
          <div class="form-group">
            <label class="labels" for="utilisateur">Utilisateur</label>
            <input type="text" class="inputsform" id="utilisateur" name="utilisateur" placeholder="Pseudo">
          </div>
          <div class="form-group">
            <label class="labels" for="motDePasse">Mot de passe</label>
            <input type="password" class="inputsform" id="motDePasse" name="motDePasse" placeholder="Password">
          </div>
          <div class="form-group">
            <label class="labels" for="email">E-mail</label>
            <input type="text" class="inputsform" id="email" name="email" placeholder="E-mail">
          </div>
          <button type="submit" class="buttoninscr">S'inscire</button>
        </form>
    </div>
    <?php 
if(isset($_POST['email'])){
$email = $_POST['email'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $validemail= false;
} else {
     $validemail= true;
}

if(isset($_POST['utilisateur']) AND $_POST['utilisateur']!="" AND isset($_POST['motDePasse']) AND $_POST['motDePasse']!="" AND $validemail == true) // On a le nom et le prénom
  {
     
     // On fait l'insertion en base de données
    $req = $bdd->prepare('INSERT INTO users (pseudo,password,mail) Values (:utilisateur,:motDePasse,:email)'); 
    //on passe en paramètre de la requete nos variables $_POST
    $reponse = $req->execute(array(
      'utilisateur' => $_POST['utilisateur'],
      'motDePasse' => $_POST['motDePasse'],
      'email' => $_POST['email'],
      ));
    //Récupération de l'id qui vient juste d'être insérée
    $_SESSION['id'] = $bdd->lastInsertId();
  }
}
    ?>

</div>
</body>