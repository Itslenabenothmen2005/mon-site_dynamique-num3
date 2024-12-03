<?php
$tel=$_POST["tel"];
$cat=$_POST["list"];
$desc=$_POST["desc"];
$cnx=mysqli_connect("localhost","root","","bd_bac2012") or die("connection inpossible");
$req1=" select * from client where telcli='$tel';";
$res1=mysqli_query($cnx,$req1) or die("erreur accéder de donnée à la base");
$nb=mysqli_num_rows($res1);
if($nb<1) die ("numéro tlf de client n'est pas enregistrée");
$req2="select * from reclamation where telcli='$tel' and etat='N';";
$res2=mysqli_query($cnx,$req2);
$nb2=mysqli_num_rows($res2);
if($nb2>0)
    {die("etat non traiter");}
$d=date('Y-m-d H:i:s');
$req3="insert into reclamation (description,etat,daterec,telcli,idCat) values ('$desc','N','$d','$tel','$cat');";
mysqli_query($cnx,$req3) or die('erreur res3');
$va=mysqli_affected_rows($cnx);
if($va>0)echo"reclamation ajoutée avec succées";
else   echo"réclamation non ajoutée";



$mysqli_close(cnx);
?>