<?php
try {
    $user='root';
    $pass='';
    $cnx = new PDO('mysql:host=localhost;dbname=portfolio', $user, $pass);

}catch(PDOExeption $e) {
    echo 'error' , $e->getMessage(), "\n";
}
?>