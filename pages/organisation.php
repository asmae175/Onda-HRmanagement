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
<body >
  <?php
include 'header.php';
?>
<?php
include 'navigateur.php';
?>

<form style="margin-left: 5%" method="POST" action="formation1.php">
	<fieldset style="width: 67%">

		<legend style="color:#DB7093;">Informations Sur La Formation :</legend>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Le Responsable De la  Formation :</label>
      <input type="text" class="form-control" name="resp" required>
    </div>
    <div class="form-group col-md-6">
      <label>Nombre D'assistants :</label>
      <input type="text" name="nbrr" class="form-control" required>
    </div>
  </div>                     

  <div class="form-row"> 
    <div class="form-group col-md-6">
      <label for="inputCity">Sujet De la Formation : </label>
      <input type="text" name="sujet" class="form-control" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState"> La Date De la Formation :</label>
     <input type="date" name="date_form" class="form-control" required>  
    </div> 
    <div class="form-group col-md-2">
      <label> № De la Salle:</label>
      <input type="text" name="salle" class="form-control" required>
    </div>
  </div>
  <div class="form-group">
   
  </div>
  <button type="submit" class="btn btn-primary">VALIDER</button>
  <br><br>
</form>
<br>
<button type="submit" class="btn btn-primary" ><a href="formation.php" style="color:white ;">Voir liste Des Formation</a></button> <br> <br>
</body>
</html> 