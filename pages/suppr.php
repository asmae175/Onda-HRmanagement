<?php

session_start();

  /*   $bd=new PDO('mysql:host=localhost;dbname=stage2','root','');
     $result2=$bd->query('select  from employee'); 
     $reponse=$result2->fetch();    */ 

        if($_SERVER['REQUEST_METHOD'] == 'POST') 


        { 
            $matricule=$_POST['Ml'];
            $nom_prenom=$_POST['nomm'];
            $service=$_POST['ser'];
            $type_de_depart=$_POST['supp'];
             $date_de_depart=$_POST['datt'];
            $_SESSION['Ml']=$_POST['Ml'];
            $_SESSION['nomm']=$_POST['nomm'];
            $_SESSION['ser']=$_POST['ser'];
            $_SESSION['supp']=$_POST['supp'];
            $_SESSION['datt']=$_POST['datt'];

           

              try{
    $bd=new PDO('mysql:host=localhost;dbname=employe','root','');//connecter a la BD

    }
 catch(EXCEPTION $e)
   {
    die('ERROR:' . $e->getMessage());
   }
              $req=$bd->prepare("SELECT * FROM employes WHERE matricule=?");
$req->execute(array($matricule));
$requete=$req->fetch();
$_SESSION['sexe']=$requete['sexe'];
$_SESSION['date_naissance']=$requete['date_naissance'];
$_SESSION['date_entree']=$requete['date_entree'];
$_SESSION['fonction']=$requete['fonction'];
$_SESSION['grade']=$requete['grade'];
$_SESSION['affectation']=$requete['affectation'];
$_SESSION['aeroport']=$requete['aeroport'];
$_SESSION['metier_de_base']=$requete['metier_de_base'];
$_SESSION['categorie']=$requete['categorie'];
$req="INSERT INTO reduction(matricule,nom_prenom,sexe,date_de_naissance,date_entree,fonction,grade,affectation,aeroport,metier_de_base,categorie,date_de_depart,type_de_depart) VALUES(:mle,:nom,:sexe,:datenaissance,:dateentree,:fonction,:grade,:affectation,:aeroport,:metierdebase,:categorie,:datedepart,:typedepart)";
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
$stmt->bindParam(':datedepart', $datedepart);
$stmt->bindParam(':typedepart', $typedepart);

// insertion d'une ligne
$mle=$_SESSION['Ml'];
$nom1=$_SESSION['nomm'];
         
 $sexe1= $_SESSION['sexe'];
 $date1=$_SESSION['date_naissance'];
 $date21= $_SESSION['date_entree'];
 $fonction1=$_SESSION['fonction'];
$grade1=$_SESSION['grade'];
 $affectation1=$_SESSION['affectation'];
 $aeroport1= $_SESSION['aeroport'];
$metierdebase1 =$_SESSION['metier_de_base'];
$categorie1=$_SESSION['categorie'];
 $typedepart=$_SESSION['supp'];
 $datedepart=$_SESSION['datt'];
$stmt->execute();
            
        }

?>

<!DOCTYPE html>  
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
            img{ 
  margin-left: -70px; 
  margin-top: -5px;
}
p{
  color: blue;
}

.parag1{ 
  margin-left: 10px; 
}


</style>
<body > 
  <?php
include 'header.php';
?>
<?php
include 'navigateur.php';
?>
  <header style="background-image: url(simple.jpg);">
   
<div class="container">

     <div class="all">

    <legend style="margin-left: 10%; color: #0101DF">Liste Des Employés Supprimés </legend>

  <table class="table table-striped">
    <thead>
      <tr>
        <th style="color:#D87093;">Matricule</th>
        <th  ><?php 
  echo $_SESSION['Ml'];  ?></th>
      </tr>
    </thead>
    <tbody>
<div    class="centre">
  <tr>
  <th style="color:#D87093;" class="b">Nom Complet</th>
  
  <th class="b">
  <?php echo $_SESSION['nomm'] ;
  ?></th></tr>
  <tr >
    <th style="color:#D87093;">Sexe</th>
<th class="b">
  <?php echo $_SESSION['sexe'] ;
  ?></th></tr>
  <tr>
  <th style="color:#D87093;">Date De Naissance</th>   
  <th class="b">   
  <?php echo $_SESSION['date_naissance'] ;
  ?></th>
</tr>
<tr>
  <th style="color:#D87093;">Date D'entrée</th>
  <th class="b">
  <?php echo $_SESSION['date_entree'] ;
  ?></th></tr>
  <tr>
    <th style="color:#D87093;">Fonction </th>
  <th class="b">
  <?php echo $_SESSION['fonction'] ;
  ?></th></tr>
  <tr>
    <th style="color:#D87093;">Grade</th>
  <th class="b">
  <?php echo $_SESSION['grade'] ;
  ?></th></tr>
  <tr>
    <th style="color:#D87093;">Affectation</th>
  <th class="b">
  <?php echo $_SESSION['affectation'] ;
  ?></th></tr>
  <tr>
    <th style="color:#D87093;">Aeroport</th>
  <th class="b">
  <?php echo $_SESSION['aeroport'] ;
  ?></th></tr>
  <tr>
  <th style="color:#D87093;">Metier De Base</th>
  <th class="b">
  <?php echo $_SESSION['metier_de_base'] ;
  ?></th></tr>
  <tr>
  <th style="color:#D87093;">Catégorie</th>
  <th class="b">
  <?php echo $_SESSION['categorie'] ;
  ?></th></tr>
      <tr>
  <th style="color:#D87093;">Type de depart</th>
  <th class="b">
  <?php echo $_SESSION['supp'] ;
  ?></th></tr>
      <tr>
  <th style="color:#D87093;">Date de depart</th>
  <th class="b">
  <?php echo $_SESSION['datt'] ;
  ?></th></tr>
  
  </thead>
  <tbody><br>
<a type="submit" class="btn btn-primary btn-md" href="liste2.php">Voir liste des employés supprimer</a>
   
     



<?php 
if(isset($_POST['Ml'])) 
{$Mle=$_POST['Ml'];
    $bd=new PDO('mysql:host=localhost;dbname=employe','root','');//connecter a la BD
    $result=$bd->query('delete from employes where matricule="' .$Mle. '"');
  
     echo  " <h5 style=\"color:red\"; >Employee a été bien supprimée </h1>" ;
} 
?> 
<div class="wrapper"> 
            <span class="group-btn">     
                <a type="submit" class="btn btn-primary btn-md" href="imprim2.php">Imprimer</a>
            </span>
            </div>  
</html> 