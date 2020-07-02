<?php 

$con=mysqli_connect("localhost","root","","location") or die(mysql_error());
//mysqli_select_db($con,"location") or die(mysql_error());


if (isset($_POST["valider"])) 
{
	if (!empty($_POST["nom"]) and !empty($_POST["email"]) and !empty($_POST["tele"]) and !empty($_POST["ville"]) and !empty($_POST["categorie"]) and !empty($_POST["annee"]) 
	and !empty($_POST["marque"]) and !empty($_POST["couleur"]) and !empty($_POST["tc"]) and !empty($_POST["carburant"]) and !empty($_POST["km"]) and !empty($_POST["desc"]) 
	and !empty($_POST["prix"]) and !empty($_POST["photo"])) 
	{
		$nom=filter_var($_POST["nom"],FILTER_SANITIZE_STRING);
		$email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
		$tele=filter_var($_POST["tele"],FILTER_SANITIZE_NUMBER_INT);
		$ville=$_POST["ville"];
		$categorie=$_POST["categorie"];
		$annee=filter_var($_POST["annee"],FILTER_SANITIZE_NUMBER_INT);
		$marque=$_POST["marque"];
		$couleur=$_POST["couleur"];
		$tc=$_POST["tc"];
		$carburant=$_POST["carburant"];
		$desc=filter_var($_POST["desc"],FILTER_SANITIZE_STRING);
		$km=filter_var($_POST["km"],FILTER_SANITIZE_NUMBER_INT);
		$prix=filter_var($_POST["prix"],FILTER_SANITIZE_NUMBER_INT);
		$photo=filter_var($_POST["photo"],FILTER_SANITIZE_STRING);

		if (/*filter_var($tele, FILTER_VALIDATE_INT) !== false and filter_var($annee, FILTER_VALIDATE_INT) !== false and filter_var($km, FILTER_VALIDATE_INT) !== false and
			filter_var($prix, FILTER_VALIDATE_INT) !== false and*/ filter_var($email, FILTER_VALIDATE_EMAIL) !== false ) 
		{
			$req="INSERT INTO informations(Name,Email,Phone,Ville,Categorie,Annee,Marque,Couleur,TCarr,Carburant,Description,Km,Prix,Photo,DateAnnance)";
			$req.="VALUES ('".$nom."','".$email."',".$tele.",'".$ville."','".$categorie."',".$annee.",'".$marque;
			$req.="','".$couleur."','".$tc."','".$carburant."','".$desc."',".$km.",".$prix.",'".$photo."',now())";

			mysqli_query($con,$req) or die(mysqli_error());	
			mysqli_close($con);			
		}
		else
		{
			echo "Probleme validation";
		}
	}
	else
	{
		echo "cmpletez le formulaire svp";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">	
		<h1>Location des voitures</h2>
		<div class="service" style="">
			<div class="one">
				<a href="index.php"><h4 style="color: #FCBAD3">Diposer votre annonce</h4></a>
			</div> 
			<div class="img"><img src="logo.png"></div>
			<div class="two">
				<a href="index2.php"><h4 style="color: #DBEDF3">Annonces en Ligne</h4></a>
			</div> 		
		</div>
		<div class="frm">
			<div class="title">
				<h4>Merci de complèter ce formulaire</h4>
			</div>
			<div class="f">
			<form method="POST" action="#">
				<label>Votre Nom :<span>*</span></label><input type="text" name="nom" placeholder="Nom"><img src="username.png"><br>
				<label>Telephone :<span>*</span></label><input type="text" name="tele" maxlength="10" placeholder="Par exemple : 0633535256"><img style="top: 40.3%" src="phone.png"><br>
				<label>E-mail :<span>*</span></label><input type="text" name="email" placeholder="E-mail"><img style="top: 46.5%" src="mail.png"><br>
				<label>Ville :<span>*</span></label><select name="ville">
														<option >Agadir</option><option >Tetouan</option><option >Meknes</option>
														<option >Casablanca</option><option >Marrackech</option><option >Rabat</option>
														<option >Tanger</option><option >Fes</option><option >Essaouira</option>
														<option >Laayoune</option><option >Oujda</option></select><br>
				<label>Catégories :<span>*</span></label><select name="categorie">
														<option >Mini</option><option >Economique</option><option >Intermediaire</option>
														<option >Routiere</option><option >Monospace</option><option >Luxe</option>
														<option >Cabriolet</option><option >SUV</option></select><br>						
				<label>Année (Modèle) :<span>*</span></label><input type="text" name="annee" maxlength="4" placeholder="Année"><br>
				<label>Sous-Catégories:</label>

									<div class="part1">
										<h4>Marque</h4>
										<input type="radio" name="marque" value="Audi" class="option-input radio"><label for="marque">Audi</label><br>
										<input type="radio" name="marque" value="BMW" class="option-input radio"><label for="marque">BMW</label><br>
										<input type="radio" name="marque" value="Dacia" class="option-input radio"><label for="marque">Dacia</label><br>
										<input type="radio" name="marque" value="Fiat" class="option-input radio"><label for="marque">Fiat</label><br>
										<input type="radio" name="marque" value="Ford" class="option-input radio"><label for="marque">Ford</label><br>
										<input type="radio" name="marque" value="Honda" class="option-input radio"><label for="marque">Honda</label><br>
										<input type="radio" name="marque" value="KIA" class="option-input radio"><label for="marque">KIA</label><br>
										<input type="radio" name="marque" value="Mercedes" class="option-input radio"><label for="marque">Mercedes</label><br>
									</div>

									<div class="part2">
										<h4>Couleur</h4>
										<input type="radio" name="couleur" value="Noir" class="option-input radio"><label for="couleur">Noir</label><br>
										<input type="radio" name="couleur" value="Blanc" class="option-input radio"><label for="couleur">Blanc</label><br>
										<input type="radio" name="couleur" value="Rouge" class="option-input radio"><label for="couleur">Rouge</label><br>
										<input type="radio" name="couleur" value="Bleu" class="option-input radio"><label for="couleur">Bleu</label><br>
										<input type="radio" name="couleur" value="Gris" class="option-input radio"><label for="couleur">Gris</label><br>
										<input type="radio" name="couleur" value="Jaune" class="option-input radio"><label for="couleur">Jaune</label><br>
										<input type="radio" name="couleur" value="Rose" class="option-input radio"><label for="couleur">Rose</label><br>
										<input type="radio" name="couleur" value="Vert" class="option-input radio"><label for="couleur">Vert</label><br>	
									</div>

									<div class="part1" style="height: 180px">
										<h4>Carburant</h4>
										<input type="radio" name="carburant" value="Essence" class="option-input radio"><label for="carburant">Essence</label><br>
										<input type="radio" name="carburant" value="Diesel" class="option-input radio"><label for="carburant">Diesel</label><br>
										<input type="radio" name="carburant" value="GPL" class="option-input radio"><label for="carburant">GPL</label><br>
										<input type="radio" name="carburant" value="GNV" class="option-input radio"><label for="carburant">GNV</label><br>				
									</div>

									<div class="part2" style="height: 180px">
										<h4>T. Carrosseries</h4>
										<input type="radio" name="tc" value="Berline" class="option-input radio"><label for="tc">Berline</label><br>
										<input type="radio" name="tc" value="Break" class="option-input radio"><label for="tc">Break</label><br>
										<input type="radio" name="tc" value="Monospace" class="option-input radio"><label for="tc">Monospace</label><br>
										<input type="radio" name="tc" value="Coupe" class="option-input radio"><label for="tc">Coupe</label><br>
										<input type="radio" name="tc" value="Cabriolets" class="option-input radio"><label for="tc">Cabriolets</label><br>				
									</div><br>

							
				<label style="margin-top: 190px">Kilométrage :</label><input type="text" name="km" maxlength="6" placeholder="kilométrage" style="width: 20%;margin-right: 36.5%"><br>
				<label style="margin-top: 5px">Description :</label><textarea name="desc" placeholder="Votre Description"></textarea><br>		
				<label style="margin-top: 85px">Prix :<span>*</span></label><input type="text" name="prix" placeholder="prix en DH" style="width: 10%;margin-right: 46.5%"><br>		
				<label>Photo :<span>*</span></label><input type="file" name="photo"><br><br>	
				<input type="submit" value="valider l'annonce" name="valider">					


			</form>
			</div>
		</div>
	</div>
</body>
</html>