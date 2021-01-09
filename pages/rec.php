<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="tess.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
   <?php
       include 'header.php' ;?>
       <?php 
       include 'navigateur.php'; ?>
<body style="background-color: #F0F8FF;">
<form style="margin-left: 5%" method="POST" action="pagerec.php">
	<fieldset style="width: 67%">

		<legend style="color:   #C71585; width: 70%">Informations Personnelles :</legend>
    <div class="form-group">
      <label> Mle </label>
      <input type="text" name="Mle" class="form-control">
      <label> Nom et Prenom </label>
      <input type="text" name="nomemployee" class="form-control">
    </div>
    <div class="form-group">
                         <label>Sexe</label>
                        <input type="radio" name="sexe">F
                        <input type="radio" name="sexe">M 
</div>

     <div class="form-group">
  <label>Date de naissance</label>
                        <input type="date" name="date" required>
     </div>
       <div class="form-group">
  <label>Date D'entree </label>
                        <input type="date" name="date2" required>
                        </div>
                          <div class="form-group"> 

<div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect"> Service </label>
      <select class="custom-select mr-sm-2" name="service" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="COMMANDANT AEROPORT DE DIVISION">COMMANDANT AEROPORT DE DIVISION</option>
        <option value="Service Technique Navigation">Service Technique Navigation</option>
        <option value="Service Navigation Aerienne">Service Navigation Aerienne </option>
         <option value="Service Exploitation Aeroportuaire">Service Exploitation Aeroportuaire </option>
          <option value="Service S.S.Q.E ">Service S.S.Q.E </option>
      </select>
    </div>
 </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Fonction </label>
    <input type="text" name="fonction" class="form-control" id="inputAddress">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Grade </label>
    <input type="text"  name="grade" class="form-control" id="inputAddress2">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Affectation </label>
    <input type="text" name="affectation" class="form-control" id="inputAddress2">
  </div>  
<div class="form-group">
    <label for="inputAddress2">Aeroport </label>
    <input type="text" name="aeroport" class="form-control" id="inputAddress2">
  </div> 
<div class="form-group">
    <label for="inputAddress2">Metier De Base </label>
    <input type="text" name="metier_de_base" class="form-control" id="inputAddress2">
  </div> 
  <div class="form-group">
    <label for="inputAddress2">Cat </label>
    <input type="text" name="cat" class="form-control" id="inputAddress2">
  </div>
  <div class="form-group">
    <label for="inputAddress2">L'échelon </label>
    <input type="text" name="echelon" class="form-control" id="inputAddress2">
  </div>  
 <div class="form-group">
  <button type="submit"  class="btn btn-primary">Valider </button>
</div>
</fieldset>

</form>
</body>
</html>