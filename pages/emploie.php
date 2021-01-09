<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="../style/design.css" />
	<title></title>
</head>

<body>

<?php include('header.php') ?>
<?php include('navigateur.php') ?>
<?php include('menu.php') ?>
<?php
$action = (isset($_GET['action']))?htmlspecialchars($_GET['action']):''; //On récupère la valeur de la variable $action

	try
	{
		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=employe;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
	}



	switch($action)
	{
		case "enreg":



			// Si tout va bien, on peut continue

			/*$req = $bdd->prepare('INSERT INTO tache(type, nom, prenom, telephone, mail, timestamp) VALUES(:typ, :nom, :pre, :tel, :mai, tim)');
			$req->execute(array(
			'typ' => $_POST['type'],
			'nom' => $_POST['nom'],
			'pre' => $_POST['prenom'],
			'tel' => $_POST['telephone'],
			'mai' => $_POST['mail'],
			'tim' => NOW(),			
			));*/ 
			$req = $bdd->prepare('INSERT INTO todolist (texte) VALUES(?)');
			$req->execute(array($_POST['texte']));

			echo '<div id="corps">Tâche ajouté <a href="emploie.php">Retour</a></div>';

				
					
		break;
		case "val":
		//$req = $bdd->prepare('update tache SET etat =:eta WHERE id=:id');
	/*	UPDATE company SET NOM_COMPANY = :nom_company WHERE ID_COMPANY = :id_company"*/
		//$req->execute(array('eta' => "1",'id' => $_POST['valid']));
	     if(isset($_POST['Submit']))
			
				{ $s=$_POST['Submit'];
					$req="DELETE FROM todolist WHERE texte=:texte3";
				$stmt=$bdd->prepare($req);
       


$stmt->execute(array (':texte3'=>$_POST['txt']));

			
		echo '<div id="corps">Tâche valider avec succés  <a href="emploie.php">Retour</a></div>';}
		
		
		break;
		case "add"://Formulaire d'ajout
?>
		<div id="corps">	
			<form id="formulaire" action="emploie.php?action=enreg" method="post">

				<table >
					<tr >
						<td><label for="texte">Tâche:</label></td>	
						<td><input type="text" name="texte"/></td>
				    </tr>
				
				    <tr>
						<td><input type="submit" value="Ajouter" /></td>
					</tr>
				</table>
			</form>	
		</div>
<?php		

		break;
		default:
?> <div id="corps"><?php

		// On récupère tout le contenu de la table bureau
		$reponse = $bdd->query('SELECT * FROM todolist ');
		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
			switch($donnees["texte"])
			{
			case "1":	
			
			
			
?>			<div id="yes">	
				<strong>Texte</strong> : <?php echo $donnees['texte']; ?><br /> <br />
				<?php echo 'Le '.date('d/m/Y', $donnees['timestamp']).' &agrave; '.date('H:i:s', $donnees['timestamp']);?>

			
			</div>
<?php
			break;
			default:
		?>	<div id="no">
                 
				<strong>Tâches:</strong> : <?php echo $donnees['texte']; ?><br />
		 <br />
				
			
						
				
			<form method="POST" action="emploie.php?action=val" >
			<input type="hidden" name="txt" value="<?php echo $donnees['texte']?>">	
				<label><?php $donnees['texte']?></label>
			<input  class="myButton" style="float:right; margin-top: -44px;" type="submit" name="Submit" value="Validé">
			</form>
			</div>
			<?php 
			
			}




			

		}
		$reponse->closeCursor(); // Termine le traitement de la requête
	}
           ?>
</div>


</body>
</html>