<?php
if(isset($_POST['btn_envoyer'])) {
	if(isset($_POST['inputEmail']) && $_POST['inputEmail'] != '' && isset($_POST['inputSubject']) && $_POST['inputSubject'] != '' &&
	isset($_POST['contenu']) && $_POST['contenu'] != '') {
		$mail = $_POST['inputEmail'];
		$sujet = $_POST['inputSubject'];
		$contenu = $_POST['contenu'];
		$url = 'mailto:'.$mail.'?subject='.$sujet.'&body='.$contenu;
		header('Location: '.$url);
	}
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ClaroStage</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="./css/all.min.css">
	<link rel="stylesheet" href="bootstrap-tagsinput.css">
	<link rel="icon" href="../images/icone.png" alt="logoiut" />
</head>

<body class="text-center">
<header>
	<nav>
		<ul>
			<li><a href="https://www.universite-lyon.fr"><img class="imagevraiheader" src="../images/UnivLyon.png" alt="VraiHeaderiut"></a></li>
		</ul>
	</nav>
	<a href="index.html"><h1 style="color: white;"><img id="LOGOSITE" src="../images/logoIndex.png" alt="Logo" style="height: 100%;width: 100%;"></h1></a>
	<nav>
		<ul>
			<li><a href="https://www.univ-lyon1.fr/?utm_source=banniere&utm_campaign=Réseau%20KSUP"><img class="imagevraiheader" src="../images/LYON1.png" alt="VraiHeaderiut"></a></li>
		</ul>
	</nav>
</header>

<div class="blocduhaut">
	<a href="http://iut.univ-lyon1.fr/">
		<img class="imageheader" src="../images/headerptut.png" alt="Headeriut">
	</a>
</div>

<br>

<div class="containerconnexion" style="justify-content:center; align-items:center;">
	<div class="containeroffreconnexion" style="width: 65%; height: 450px">
        <h3 style="padding-top: 9px;">Envoyer un mail</h3><hr>
		
			<!-- Ajout des mails -->
			<div class="form-group row">
			  <label for="container" class="col-sm-2 col-form-label">À: </label>
			<div id="container" class="col-sm-10">
            	<div>
              		
            	</div> 
            	<div class="tag-container">
              		<input placeholder="Email"/>  
            	</div>
     			</div>
				 </div>
			  <br>
			  <!-- Formulaire -->
			  <form action="" method="post">
			  <!-- Email caché -->
			  <input type="email" id="emails" name="inputEmail" autofocus multiple required/>
			  <!-- Sujet -->
			  <div class="form-group row">
				<label for="inputSubject" class="col-sm-2 col-form-label">Sujet: </label>
				<div class="col-sm-10" style="padding-right: 10%;">
				  <input type="name" class="form-control" name="inputSubject" placeholder="Titre" required>
				</div>
			  </div>
			<!-- Contenu -->
			  <br>
		<div class="form-group" style="padding-right: 9%; padding-left: 17%;">
            <textarea placeholder="Écrire votre message ici" name="contenu" class="form-control" style="height: 150px;resize: none;"></textarea>
        </div>
		<!-- Envoyer -->
			<br>
            <button class="btn btn-primary" name="btn_envoyer" type="submit" style="background-color: #C44B71; border-color:#C44B71;">Envoyer</button>
        </form>
    </div>
</div>
<script src="./js/main.js"></script>
<footer>ClaroStage © 2021</footer>
</body>
</html>