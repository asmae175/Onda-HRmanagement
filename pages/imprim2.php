<?php 
    session_start();
    /*if(isset($_SESSION['login']) && isset($_SESSION['password']))
    { */
?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <title>page_imprimer</title>
           <style>
            td{
   width:400px;
}
            .titre { margin-right: 50px;
              color:#175DB3;}
              .date3{margin-left: 1300px;}
            .conta
            {
                background-color:#EEE;
                margin:50px;
                margin-bottom:0;
                width:1000px;
            }
           div.container,.fin,.contenue
           {   padding:15px;
               display:flex;
               justify-content: space-between;
           }
         
           #t1{ border:2px solid black; }
           #t2 { border:2px solid black; }
          #t1 td {
            border:1px solid black;
           }
          img{ 
  margin-left: -70px; 
  margin-top: -5px;
}
p{
  color: blue;
}

</style>
           
      
         
<style type="text/css" media="print"> 
.revenir { 
display:none; 
} 

</style>

    </head> 
    <body onload="window.print()">
    <div style="font-size:180%"><a class="revenir" href="pagerevenir.php" style="color: black;">Revenir</a></div>
    
      <div class="container"> 
    <img src="../images/logo.png"><br><br>
    <div style="display: block;">
  <p style="margin:10px;margin-left: 900px;  font-size:20px">المكتب الوطني للمطارات</</p> 

  <p style="margin: 10; margin-left: 900px; font-size: 20px"><b>O</b>ffice <b> N</b>ational <b> D</b>es <b>A</b>eroports </p> </div></div>

     <?php 
     $bd=new PDO('mysql:host=localhost;dbname=employe','root',''); 
     $result2=$bd->prepare('SELECT * FROM employes WHERE service=?');
     $login='commandant aeroport chef division';
$result2->execute(array($login));
$reponse=$result2->fetch();
     ?>
    <div class="titre"><H2><center>TELECOPIE</center></H2></div>
    <div class="date3">Al Hoceima, le : <?php
$date = date("d-m-Y");
echo $date ; ?></div>
     
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
  <tbody>

    <tr> 
      <?php

    try{
    $bd=new PDO('mysql:host=localhost;dbname=employe','root','');//connecter a la BD

    }
 catch(EXCEPTION $e)
   {
    die('ERROR:' . $e->getMessage());
   }
    $res=$bd->query('select * from reduction');
    $c=1;
    while($result=$res->fetch())
{
     echo "<th scope=\"row\"> ".$c."</th>
      <td> ".$result['matricule'] ." </td>
      <td> ".$result['nom_prenom']." </td>
      <td> ".$result['service'] ." </td>
      <td> ".$result['type_de_depart'] ." </td> 
      <td> ".$result['date_de_depart'] ." </td>
  
    </tr>
  
  </tbody> 


</body>";
$c=$c+1;}

?> 
               
 </body>
</html>