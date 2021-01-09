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
     <table class="table table-striped" id="t1">
      <tr>
     <td >Expéditeur : M. Le Commandant de
l’Aéroport d’Al Hoceima  <b> <?php   echo $reponse["nom_prenom"];?> </b></td>
     <td >Destinataire (s) : Mme. La Directrice du
Capital Humain. </td>
            </tr>
            <tr>
              <td>Date de transmission :<br>      
                  Référence :                 </td>
              <td>Copie (s) à :                          </td>
            </tr></table>
            <table class="table table-striped" id ="t2">
            <th>OBJET : Prise de Service</th>
          </table>
          <table class="table table-striped" id ="t2">
            <th>
              TEXTE:<br>

J’ai l’honneur de vous informer de la prise de service <?php
            if($_SESSION['sexe']=='F')
                echo "Mme,Mlle."   . $_SESSION['nom_employee'] . "<br>";
            else 
                 echo "Mr."    . $_SESSION['nom_employee'] . "<br>";
            ?>,
Mle :<?php echo $_SESSION['Matricule'] . "<br>"; ?>,électricien à l’aéroport d’Al Hoceima et ce à compter du  <?php
$date = date("d-m-Y");
echo $date ; ?>.
            </th></table>
            <table class="table table-striped" id ="t2">
            <th>Observations particulières</th>
          </table>
               
 </body>
</html>
  