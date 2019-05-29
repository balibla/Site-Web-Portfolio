<?php 
include 'admin/db.php';
require 'admin/session.php';
Session::start();
$select = $db->query('SELECT id, name, description, image, lien FROM tab');

$tab = $select->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>projets</title>
    <link rel="stylesheet" href="css/projets.css">
    <link rel="icon" type="image/ico" href="img/logo.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
  .articls-box {
    background-color: #D5AD6D;
    padding: 2.5rem 1.3rem;
    border-radius: 1rem;
    margin-bottom: 3rem;
  }
  
  
  
  .articls-box .a-title {
    font-size: 1.4rem;
    text-transform: uppercase;
    text-align: center;
    padding: .4rem 0;
  }
  
  .articls-box .a-description {
    color: #4e4e4e;
  }
  .drinks .articls-box{
    background-color: darkred;
    padding: 2.5rem 1.3rem;
    border-radius: 1rem;
    margin-bottom: 3rem;
    color: white;
  }
  .drinks .articls-box .a-description {
    color: white;
  }
</style>
<body>
    <header>
        <div class="container-fluid bg-black">
            <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top"style = "text-transform: uppercase;">
            <div class="container">
            <li><a href="accueil.php"><img id="logo" src="img/logo.png" style="width: 40px;"> </a></li>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="accueil.php">Accueil <span class="sr-only">(current)</span> </a></li>
                        <li class="nav-item">
                        <a class="nav-link" href="about.php">À propos</a></li>
                        <li class="nav-item active">
                        <a class="nav-link" href="projet.php">Projets</a></li>
                       <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a></li>

                    </ul>
                    
                  </div>
                </div>
                </nav>
           </div>  
    
  </header>
  <section id="Pro">
      <div class="heading">
             <h2>PROJETS</h2>
           <div class="yellow-divider">
            </div>
         </div>



       


  <div class="row">
       

<div class="container mt-5">
	<div class="row">
	<?php  foreach($tab as $tabs): ?>
  <div class="col-md-3">
              <div class="articls-box shadow-lg p-3 mb-5">
                <div>
                  <img src="img/<?= $tabs['image'];?>" alt="" class="img-fluid">
                </div>
                <div>
                  <h2 class="a-title"><?=$tabs['name']; ?></h2>
                  <p class="a-description text-center">
                  <?=$tabs['description']; ?>
                  </p>
                  <p>
                    <a class="more-link" style="color:black;" href="<?= $tabs['lien'];?>" target="_blank"><i class="fas fa-external-link-alt"></i>En savoir plus</a></p>
                </div>
              </div>
          </div> 
          <?php endforeach; ?>
</section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
