<?php 
    session_start();
      if($_SERVER['REQUEST_METHOD'] == 'POST') 


        { 
            $Mle=$_POST['Mle'];
           $nom=$_POST['nomemployee'];
           $sexe=$_POST['sexe'];
            $date_naissance=$_POST['date'];
            $date_entree=$_POST['date2'];
            $fonction=$_POST['fonction'];
            $grade=$_POST['grade'];
            $affectation=$_POST['affectation'];
            $aeroport=$_POST['aeroport'];
            $metier_de_base=$_POST['metier_de_base'];
            $cat=$_POST['cat'];
            $service=$_POST['service'];
             $echelon=$_POST['echelon'];
          
            $_SESSION['Matricule']=$_POST['Mle'];
            $_SESSION['nom_employee']=$_POST['nomemployee'];
            $_SESSION['sexe']=$_POST['sexe'];
            $_SESSION['date_naissance']=$_POST['date'];
            $_SESSION['date_entree']=$_POST['date2']; 
            $_SESSION['fonction']=$_POST['fonction'];
            $_SESSION['grade']=$_POST['grade'];
            $_SESSION['affectation']=$_POST['affectation'];
            $_SESSION['aeroport']=$_POST['aeroport'];
            $_SESSION['metier_de_base']=$_POST['metier_de_base'];
            $_SESSION['categorie']=$_POST['cat'];
            $_SESSION['service']=$_POST['service'];
            $_SESSION['echelon']=$_POST['echelon'];

              $bd=new PDO('mysql:host=localhost;dbname=employe','root','');//connecter a la BD
              $req="INSERT INTO employes(matricule,nom_prenom,sexe,date_naissance,date_entree,fonction,grade,affectation,aeroport,metier_de_base,categorie,service,echelon) VALUES(:mle,:nom,:sexe,:datenaissance,:dateentree,:fonction,:grade,:affectation,:aeroport,:metierdebase,:categorie,:service,:echelon)";
            $stmt=$bd->prepare($req);
       
 $stmt->bindParam(':mle', $mle);

$stmt->bindParam(':nom', $nom1);
$stmt->bindParam(':sexe', $sexe1);
$stmt->bindParam(':datenaissance', $date1);
$stmt->bindParam(':dateentree', $date21);
$stmt->bindParam(':fonction', $fonction1);
$stmt->bindParam(':grade', $grade1);
$stmt->bindParam(':affectation', $affectation1);
$stmt->bindParam(':aeroport', $aeroport1);
$stmt->bindParam(':metierdebase', $metierdebase1);
$stmt->bindParam(':categorie', $categorie1);
$stmt->bindParam(':service', $service1);
$stmt->bindParam(':echelon', $echelon1);
// insertion d'une ligne
$nom1=$nom;
 $mle=$Mle;        
 $sexe1= $sexe;
 $date1=$date_naissance;
 $date21= $date_entree;
 $fonction1=$fonction;
$grade1=$grade;
 $affectation1=$affectation;
 $aeroport1= $aeroport;
$metierdebase1 =$metier_de_base;
$categorie1=$cat;
 $service1=$service;
 $echelon1=$echelon;
$stmt->execute();
            
            
        } ?>


<!DOCTYPE html>
<html>
<head>
	<title>header </title>
	<link  rel="stylesheet" type="text/css" href="pagerec.css">
	<link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://radio-virtuelle.fr/Caranille/Design/js/jquery.js"></script>
	<script src="http://radio-virtuelle.fr/Caranille/Design/js/bootstrap.min.js"></script>
	<style>
		td
{
    font-weight: bolder;
}
.btn-warning , .btn-warning :hover, .btn-warning :active, .btn-warning :visited
 {background-color:	#cc3366  !important;
 	text-align: center!important;
 	color:white;}
.imprimer { display:inline;
float:left; }
   </style>
}
}

</head>
<body>
<?php
include 'header.php';
?>
<?php
include 'navigateur.php';
?>
<h2 style="color:#000080;">Recrutement du personnel</h2>
	<table class="table table-striped">
    <thead>
      <tr>
      	<th style="color:#D87093;">Matricule</th>
        <th  ><?php 
	echo $_POST['Mle'];  ?></th>
      </tr>
    </thead>
    <tbody>
<div    class="centre">
	<tr>
	<th style="color:#D87093;" class="b">Nom Complet</th>
	
	<th class="b">
	<?php echo $_POST['nomemployee'] ;
	?></th></tr>
	<tr >
		<th style="color:#D87093;">Sexe</th>
<th class="b">
	<?php echo $_POST['sexe'] ;
	?></th></tr>
	<tr>
	<th style="color:#D87093;">Date De Naissance</th>		
	<th class="b">	 
	<?php echo $_POST['date'] ;
	?></th>
</tr>
<tr>
	<th style="color:#D87093;">Date D'entrée</th>
	<th class="b">
	<?php echo $_POST['date2'] ;
	?></th></tr>
	<tr>
		<th style="color:#D87093;">Fonction </th>
	<th class="b">
	<?php echo $_POST['fonction'] ;
	?></th></tr>
	<tr>
		<th style="color:#D87093;">Grade</th>
	<th class="b">
	<?php echo $_POST['grade'] ;
	?></th></tr>
	<tr>
		<th style="color:#D87093;">Affectation</th>
	<th class="b">
	<?php echo $_POST['affectation'] ;
	?></th></tr>
	<tr>
		<th style="color:#D87093;">Aeroport</th>
	<th class="b">
	<?php echo $_POST['aeroport'] ;
	?></th></tr>
	<tr>
	<th style="color:#D87093;">Metier De Base</th>
	<th class="b">
	<?php echo $_POST['metier_de_base'] ;
	?></th></tr>
	<tr>
	<th style="color:#D87093;">Catégorie</th>
	<th class="b">
	<?php echo $_POST['cat'] ;
	?></th></tr>
	<tr>
	<th style="color:#D87093;">L'échelon</th>
	<th class="b">
	<?php echo $_POST['echelon'] ;
	?></th></tr>
</div></tbody></table>
 
<button type="button" class="btn btn-warning"><a class="imprimer" href="imprim.php">Imprimer</a></button>

</body></html>
