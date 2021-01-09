<?php
session_start();
   if($_SERVER['REQUEST_METHOD'] == 'POST') 


        { 
            $responsable=$_POST['resp'];
            $sujet=$_POST['sujet'];
            $assustant=$_POST['nbrr'];
            $date_form=$_POST['date_form'];  
             $salle=$_POST['salle'];
            $_SESSION['resp']=$_POST['resp'];
            $_SESSION['sujet']=$_POST['sujet'];
            $_SESSION['nbrr']=$_POST['nbrr'];
            $_SESSION['date_form']=$_POST['date_form'];
            $_SESSION['salle']=$_POST['salle'];
 
           

              $bd=new PDO('mysql:host=localhost;dbname=employe','root','');//connecter a la BD
            $result=$bd->query('INSERT INTO organisation(responsable,sujet,assistant,date_form,salle) VALUES("' .$responsable. '","' .$sujet. '","' .$assustant. '","' .$date_form. '","' .$salle. '")');
            
            
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
<body onload="window.print()" style="background-image: url(eu.jpg);"> 
  <header style="background-image: url(simple.jpg);">
<div style="font-size:180%"><a href="test.php" style="color: black;">Revenir</a></div>    
<div class="container">
	    <img src="ONDA.png"><br><br>
    <div style="display: block;">
  <p style="margin:10px;margin-left: 900px; margin-top: -160px; font-size:20px">المكتب الوطني للمطارات</</p>  
  
  <p style="margin: 10; margin-left: 830px;  margin-top: 1px; font-size: 20px"><b>O</b>ffice <b> N</b>ational <b> D</b>es <b>A</b>eroports </p> </div></div>
</div>
<br><br> </header>
<br><br><br>

     <div class="all">


    <legend style="margin-left: 25%; color:red;">Les Informations Sur La Formation : </legend>

   <table class="table" style="margin-left: 10px;margin-right: -90%;">
  <thead class="thead-dark"> 
    <tr>
       <th scope="col">#</th>
      <th scope="col">Le Responsable</th>
      <th scope="col">Sujet De Formation</th> 
      <th scope="col">Nombre D'Assustants</th>
      <th scope="col">Date</th>
       <th scope="col">Salle</th>
    </tr>
  </thead>
  <tbody>

    <tr> 
      <?php

    $bd=new PDO('mysql:host=localhost;dbname=employe','root','');//connecter a la BD
    $res=$bd->query('select * from organisation');
    $c=1;
    while($result=$res->fetch())
{
     echo "<th scope=\"row\"> ".$c."</th>
      <td> ".$result['responsable'] ." </td>
      <td> ".$result['sujet']." </td>
      <td> ".$result['assistant'] ." </td>
      <td> ".$result['date_form'] ." </td> 
      <td> ".$result['salle'] ." </td>
  
    </tr>
  
  </tbody> 


</body>";
$c=$c+1;}

?> 


</div>
</html> 