<?php
$tel=$_POST['tel'];
$dp=$_POST['daterep'];
$cnx=mysqli_connect("localhost","root","","bd_bac2012") or die("errur cnx");
$req1="select * from reclamation where telcli='$tel' and etat='N';";
$res1=mysqli_query($cnx,$req1);
$nb=mysqli_num_rows($res1);
if($nb<1)
    die("le client de ce num tel n'existe pas");

$req2="update reclamation set etat='O' , daterep='$dp' where telcli='$tel';";
$res2=mysqli_query($cnx,$req2);
if(mysqli_affected_rows($cnx)==0)die("erreur modification");
else echo("modification fait avec succés");
$mysqli_close($cnx);
?>