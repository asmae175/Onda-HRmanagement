 <?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
  <script src="jquery/jquery-ui.custom.min.js"></script>
  <script src="bootstrap3/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'header.php';
include  'navigateur.php';
?> 

<div class="container">
  <h2 style="color:#000080;">Formation Interne</h2>
  <table class="table table-striped">
    <thead>
      <tr>
      	<th style="color:#D87093;">Responsable</th>
        <th  style="color:#D87093;">Sujet</th>
        <th style="color:#D87093;">Nombre d'assistant</th>
        <th  style="color:#D87093;">Date De la Formation</th>
        <th style="color:#D87093;" > № De la Salle</th>
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
   $service='exploitation aeroportuaire';
   $req=$bd->prepare('SELECT * FROM organisation ');
$req->execute();
$c=1;
while($requete=$req->fetch())
  {if ($c%2==0)
  	{$style='background-color:#E6E6FA;';
  		
  }
  	else {$style='background-color:#FAF0E6;';}
  	$c=$c+1;
  	echo"<tr style=\"".$style."\">";
  	echo "<td>".$requete['responsable']."</td>
        <td>".$requete['sujet']."</td>
        <td>".$requete['assistant']."</td>
        <td>".$requete['date_form']."</td>
        <td>".$requete['salle']."</td>";

        echo "</tr>"; }?>
            
      
    </tbody>
  </table>
</div>

</body>
</html>