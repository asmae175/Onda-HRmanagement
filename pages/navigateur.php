<!DOCTYPE html>
<html>
<head>
	<title>navigateur</title>
	<link href="../bootstrap3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../style/navigateur.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!--<script src="../jquery/jquery-ui.custom.min.js"></script>
	<script src="../bootstrap3/js/bootstrap.min.js"></script>-->

</head>
</head>
<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Listes des employés
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	<a class="dropdown-item" href="#">COMMANDANT AEROPORT CHEF DE DIVISION</a>
        	<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Service technique navigation</a>
          <a class="dropdown-item" href="#">Service navigation Aerienne </a>
           <a class="dropdown-item" href="#">Service technique navigation</a>  
          <a class="dropdown-item" href="#"> Sercice exploitation  Aeroportuaire</a> 
          <a class="dropdown-item" href="#"> Sercice S.S.Q.E</a>       
          
        </div>
      </li>-->
      <li>
       <a href="page1.php"><img style="height:30px; width:30px;" src="../images/home-logo-hi.png"></a>
       </li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listes des employés <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="commandant.php">COMMANDANT AEROPORT CHEF DE DIVISION</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="listeemploye.php">Service technique navigation</a></li>
            <li><a href="navigationaerienne.php">Service navigation Aerienne</a></li>
            <li><a href="exploitationaeroportuaire.php">Sercice exploitation  Aeroportuaire</a></li>
            <li><a href="ssqe.php"> Sercice S.S.Q.E</a></li>
          </ul>
      </li>
      <li><a href="rec.php">Recrutement du personnel</a></li>
      <li class="dropdown">
          <a href="reduc.php" >Reduction  du personnel </a>
          <!--<ul class="dropdown-menu">
            <li><a href="#">Depart volontaire</a></li>
            <li><a href="#">Retraite</a></li>
            <li><a href="#">Demission</a></li>
            <li><a href="#">autres</a></li>
          </ul>-->
      </li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Organisation <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="organisation.php">Formation interne </a></li>
        </ul></li>
              <li><a href="emploie.php">Mon emploi du temps</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>



</body>
</html>