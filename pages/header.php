<!DOCTYPE html>
<html>
<head>
 <title>header </title>
  <link  rel="stylesheet" type="text/css" href="../style/header1.css">
  <link href="../bootstrap3/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://radio-virtuelle.fr/Caranille/Design/js/jquery.js"></script>
  <script src="http://radio-virtuelle.fr/Caranille/Design/js/bootstrap.min.js"></script>
</head>
<body>
  


<div class="header"> 



<div class="logo"  >
<img class="logo" src="../images/logo.png"></div>  <p>&nbsp;</p>  <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p>
<h1 class="titre">Gestion du personnel </h1>
<p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p>

 <div class="dropdown2">
  <h4 id="btn1">bonjour </h4><p>&nbsp;</p>
  <?php 
    try{
    $bd=new PDO('mysql:host=localhost;dbname=employe','root','');//connecter a la BD

    }
 catch(EXCEPTION $e)
   {
    die('ERROR:' . $e->getMessage());
   }
   /*$login=$_SESSION['login'];
$req=$conn->prepare('SELECT nom.prenom FROM utilisateurs WHERE login=?');
$req->execute(array($login));
$requete=$req->fetch();*/
$result=$bd->query('select * from utilisateurs');//la requete demandee
 $reponse=$result->fetch();
  echo "<h4 id=\"btn1\">".$reponse['nom.prenom']." |</h4>";
  ?>

  <div class="dropdown-content2">
<a href="../index.php"><button type="button"class="btn btn-danger" href="../index.php">logout</button></a>
  </div>
</div>
</div>
</body>
</html>