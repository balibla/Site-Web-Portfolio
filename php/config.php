<?php
if ( !empty($_GET['language']) ) {
    $_COOKIE['language'] = $_GET['language'] === 'en' ? 'en' : 'fr';
} else {
    $_COOKIE['language'] = 'fr';
}
setcookie('language', $_COOKIE['language']);
if ( $_COOKIE['language'] == "en") {
    include("PHP/en.php");
 } else {
    include("PHP/fr.php");
 }
// <a href="index.php?language=en">    <a href="index.php?language=fr">
?>