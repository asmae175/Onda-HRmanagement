<?php
session_start();
if(isset($_POST['nom']) && isset($_POST['password']))
{
 try{
    $bd=new PDO('mysql:host=localhost;dbname=employe','root','');//connecter a la BD

    }
 catch(EXCEPTION $e)
   {
    die('ERROR:' . $e->getMessage());
   }
  $user=$_POST['nom'];
  $pass=$_POST['password'];
  $result=$bd->query('select * from utilisateurs');//la requete demandee
  $reponse=$result->fetch();
 if($reponse['login']==$user && $reponse['password']==$pass) 
  {
    $_SESSION['nom']=$_POST['nom'];
    $_SESSION['password']=$_POST['password'];

    header('location:pages/page1.php');
  }
  else
  {
    echo "<p style='font-size:180%;'>please try again your name not exist:)</p>";
    echo "<a href='index.php' style='font-size:160%;'>réessayer</a>";
  }
}
else  
 header('Location:index.php');
?>
</html>
