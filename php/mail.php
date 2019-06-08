<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$msg=$_POST['message'];
$mailto="balibla.fouzi@gmail.com";
$header="You received an email from".$name."\n".$phone."\n".$emai."\n".$msg;
mail($mailto,$subject,$header);
header("Location:../contact.php");

?>