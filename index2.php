

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">	
		<h1>Location des voitures</h1>
		<div class="service" style="">
			<div class="one">
				<a href="index.php"><h4 style="color:#DBEDF3">Diposer votre annonce</h4></a>
			</div> 
			<div class="img"><img src="logo.png"></div>
			<div class="two">
				<a href="index2.php"><h4 style="color:  #FCBAD3">Annonces en Ligne</h4></a>
			</div> 		
		</div>
		<div class="frm" style="height: 330px" >
			<div class="f" style="margin-top: 2%">
			<form method="POST" action="#">
							<label style="margin-left: 15%;margin-bottom: 2%;margin-top: 0.5%;">Ville :</label>		<select name="ville">
															<option >Agadir</option><option >Tetouan</option><option >Meknes</option>
															<option >Casablanca</option><option >Marrackech</option><option >Rabat</option>
															<option >Tanger</option><option >Fes</option><option >Essaouira</option>
															<option >Laayoune</option><option >Oujda</option>
														</select><br>

						  	<label style="margin-left: 15%;margin-bottom: 2%;margin-top: 0.5%;">Categorie:</label>	<select name="categorie">
															<option>Mini</option><option>Economique</option><option>Intermediaire</option>
															<option>Routiere</option><option>Monospace</option><option>Luxe</option>
															<option>Cabriolet</option><option>SUV</option>
														</select><br>

							<label style="margin-left: 15%;margin-bottom: 2%;margin-top: 0.5%;">Marque :</label>		<select name="marque">
															<option>Audi</option><option>BMW</option><option>Dacia</option>
															<option>Fiat</option><option>Ford</option><option>Honda</option>
															<option>KIA</option><option>Mercedes</option>
														</select><br>

							<label style="margin-left: 15%;margin-bottom: 2%;margin-top: 0.5%;">Carburant :</label>	<select name="carburant">
															<option>Essence</option>
															<option>Diesel</option>
															<option>GPL</option>
															<option>GNV</option>
														</select><br>

							<label style="margin-left: 15%;margin-bottom: 2%;margin-top: 0.5%;">Prix de :</label>	<select name="de">
															<option>25000</option>
															<option>50000</option>
															<option>75000</option>
															<option>100000</option>
															<option>125000</option>
															<option>150000</option>
															<option>175000</option>														
														</select><br>
							<label style="margin-left: 15%;margin-bottom: 2%;margin-top: 0.5%;">Prix à :</label>		<select name="a">
															<option>50000</option>
															<option>75000</option>
															<option>100000</option>
															<option>125000</option>
															<option>150000</option>
															<option>175000</option>
															<option>200000</option>
														</select><br>		

				<input type="submit" value="Recherche" name="valider">					
			</form>
			</div>		
		</div>

		<div class="result" style="height: auto;">
		<br>

<?php 

$con=mysqli_connect("localhost","root","","location") or die(mysql_error());
//mysqli_select_db($con,"location") or die(mysql_error());


if (isset($_POST["valider"])) 
{

		$ville=$_POST["ville"];
		$categorie=$_POST["categorie"];
		$marque=$_POST["marque"];
		$carburant=$_POST["carburant"];
		$prixde=$_POST["de"];
		$prixa=$_POST["a"];

			$req="SELECT * FROM informations WHERE ";
			$req.="Ville='$ville' and ";
			$req.="Categorie='$categorie' and ";
			$req.="Marque='$marque' and ";
			$req.="Carburant='$carburant' and ";
			$req.="Prix between $prixde and $prixa ORDER BY DateAnnance";

			$res=mysqli_query($con,$req) or die(mysql_error());
			while ($l=mysqli_fetch_object($res)) 
			{
					
		echo 	'<div class="r">
					<div class="date">
						'.$l->DateAnnance.'
					</div>
					<div class="photo">
						<img src="'.$l->Photo.'">
					</div>
					<div class="det">
						<h4>'.$l->Marque.' '.$l->Categorie.' Modele '.$l->Annee.'</h4>
						<div><b>'.$l->Prix.' DH</b> '.$l->Ville.' '.$l->Carburant.' <b>'.$l->Km.'Km</b> '.$l->Couleur.'</div>
						<div style="overflow:hidden">'.$l->Description.'</div>
						<div class="c">Contact : <b>'.$l->Name.' | '.$l->Email.' | 0'.$l->Phone.'</b></div>
					</div>	
				</div>';
			}			
}

?>		


		</div>
		<div class="final"></div>

	</div>
</body>
</html>