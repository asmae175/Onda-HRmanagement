<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST') 


        { 
            $Mle=$_POST['Mle'];
            $service=$_POST['service'];
            $grade=$_POST['grade'];
             $echelon=$_POST['echelon'];
          
            $_SESSION['Matricule']=$_POST['Mle'];
            $_SESSION['service']=$_POST['service'];
            $_SESSION['grade']=$_POST['grade'];
            $_SESSION['echelon']=$_POST['echelon'];

              $bd=new PDO('mysql:host=localhost;dbname=employe','root','');//connecter a la BD
              $req='UPDATE employes SET grade="'.$_POST['grade'].'",echelon="'.$_POST['echelon'].'" WHERE  matricule="'.$_POST['Mle'].'"';
            $stmt=$bd->prepare($req);
       

$stmt->execute();}
?>
<!DOCTYPE html>
<html>
<head>
    <title>page</title>
</head>
<body>
<?php
include 'header.php';
?>
<?php
include 'navigateur.php';
?>
<h2 style="color: red;"><center>La modification est réussi !!!</center></h2>
</body>
</html>