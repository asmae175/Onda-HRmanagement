<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Boo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap3/css/bootstrap.min.css">
  <script src="../jquery/jquery-ui.custom.min.js"></script>
  <script src="../bootstrap3/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'header.php';
include  'navigateur.php';
?> 

<div class="container">
  <h2 style="color:#000080;">Sercice S.S.Q.E</h2>
  <table class="table table-striped">
    <thead>
      <tr>
      	<th style="color:#D87093;">Matricule</th>
        <th  style="color:#D87093;">Nom Complet</th>
        <th style="color:#D87093;">Sexe</th>
        <th  style="color:#D87093;">Date De Naissance</th>
        <th style="color:#D87093;" >Date D'entrée</th>
        <th style="color:#D87093;">Fonction </th>
        <th style="color:#D87093;">Grade</th>
        <th style="color:#D87093;">Affectation</th>
        <th style="color:#D87093;">Aeroport</th>
        <th style="color:#D87093;">Metier De Base</th>
        <th style="color:#D87093;">Catégorie</th>
        <th style="color:#D87093;">L'échelon</th>
      </tr>
    </thead>
    <tbody>
      
      	<?php 
      	try{
    $bd=new PDO('mysql:host=localhost;dbname=employe','root','');//connecter a la BD

    }
 catch(EXCEPTION $e)
   {
    die('ERROR:' . $e->getMessage());
   }
   $service='S.S.Q.E';
   $req=$bd->prepare('SELECT * FROM employes WHERE service=?');
$req->execute(array($service));
$c=1;
while($requete=$req->fetch())
  {if ($c%2==0)
  	{$style='background-color:#E6E6FA;';
  		
  }
  	else {$style='background-color:#FAF0E6;';}
  	$c=$c+1;
  	echo"<tr style=\"".$style."\">";
  	echo "<td>".$requete['matricule']."</td>
        <td>".$requete['nom_prenom']."</td>
        <td>".$requete['sexe']."</td>
        <td>".$requete['date_naissance']."</td>
        <td>".$requete['date_entree']."</td>
        <td>".$requete['fonction']."</td>
        <td><a href=\"rec1.php\"".$requete['grade']."</a></td>
        <td>".$requete['affectation']."</td>
        <td>".$requete['aeroport']."</td>
        <td>".$requete['metier_de_base']."</td>
        <td>".$requete['categorie']."</td>
        <td><a href=\"rec1.php\"".$requete['categorie']."</a></td>"
        ;
        echo "</tr>"; }?>
            
      
    </tbody>
  </table>
</div>

</body>
</html>