
<?php

session_start();

?>


<!DOCTYPE html> 
<html>
<head>
	<title></title>
	<meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="tess.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://radio-virtuelle.fr/Caranille/Design/js/jquery.js"></script>
  <script src="http://radio-virtuelle.fr/Caranille/Design/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/ty.css" media="screen" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
    <style>
      label{
        color:black;    /* #7FFFD4; /*  #FFE4C4 */
      }
      legend{
        color:#58FA82; /* #ACFA58;*/
      }
       /*.formulaire { border: 10px solid #ADD8E6 ;
      border-radius: 10px;
        padding-left: 50px ;
       margin-left: 3%;
       margin-right: 3%;
        background-color: white;

            }
*/

    </style>
  </head>
<body> 
  <?php
include 'header.php';
?>
<?php
include 'navigateur.php';
?>
<div class="formulaire">
  <br><br>
<form class="form-login" style="margin-left:5%" method="POST" action="suppr.php">  
	<fieldset style="width: 30%">
	
  <div class="form-group">
  <legend style="color:   #C71585; width: 70%">Informations Personnelles :</legend>
    <div class="form-group">
<div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect"> Type De Reduction :</label>
      <select class="custom-select mr-sm-2" name="supp" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="Depart Volontaire">Depart Volontaire </option> 
        <option value="Retraite">Retraite </option>
        <option value="Demission">Demission </option>
        <option value="Autre"> Autre </option>
      </select><br>
        <div>
       
  
 </div> 
  </div></div></div></div>
  <br>
  <label> Entrer La Matricule Du l'Employee : </label>
    <input type="text" name="Ml" class="form-control" id="inputAddress">
    <br>
     <label> Entrer Le Nom  Du l'Employee : </label>
    <input type="text" name="nomm" class="form-control" id="inputAddress">
    <br>
    <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect"> Service </label>
      <select class="custom-select mr-sm-2" name="ser" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="COMMANDANT AEROPORT DE DIVISION">COMMANDANT AEROPORT DE DIVISION</option>
        <option value="Service Technique Navigation">Service Technique Navigation</option>
        <option value="Service Navigation Aerienne">Service Navigation Aerienne </option>
         <option value="Service Exploitation Aeroportuaire">Service Exploitation Aeroportuaire </option>
          <option value="Service S.S.Q.E ">Service S.S.Q.E </option>
      </select>
    </div>
 </div>
 <br>
 <label>Date De Depart :</label>
 <input type="date" name="datt" required><br><br>
    <div class="wrapper"> 
            <span class="group-btn">     
                <input type="submit" class="btn btn-primary btn-md" value="Supprimer">
            </span>
            </div> 
	</fieldset>
  <br><br>
 <button type="submit" class="btn btn-primary" ><a href="liste2.php" style="color:white;">Voir liste Des Employés supprimés</a></button><br><br>
</form> 
</div> <br><br>
</body>

</html>