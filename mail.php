<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$phone=$_POST['telephone'];
$msg=$_POST['message'];
$mailto="balibla.fouzi@gmail.com";
$header="You received an email from".$nom."\n".$prenom."\n".$phone."\n".$email."\n".$msg;
mail($mailto,$header);
header("Location:contact.php");

?>