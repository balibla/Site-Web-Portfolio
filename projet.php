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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>projets</title>
    <link rel="stylesheet" href="css/projets.css">
    <link rel="icon" type="image/ico" href="img/logo.png" />

</head>
<header>
        <div class="container-fluid bg-black">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top"style = "text-transform: uppercase;">
            <div class="container">
                <li><a href="accueil.php"><img id="logo" src="img/logo.png" style="width: 40px;"> </a></li>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse " id="navbarSupportedContent" style="margin-left: 65%;">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                             <a class="nav-link" href="accueil.php">Accueil <span class="sr-only">(current)</span></a> </li>
                         <li class="nav-item">
                             <a class="nav-link" href="about.php">À propos</a>
                         </li>
                         <li class="nav-item">
                                 <a class="nav-link active" href="projet.php">Projets</a>
                         </li>
                         <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact</a>
                         </li>
                         </ul>                
            </div>
            </div>
           </nav>
        </div>   
    </header>
<body>
    
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
<!-- footer -->
<div class="footer-section">
    <div class="footer">
	<div class="container">
		
		<div class="col-md-3 footer-two">
		    <h4>Information </h4>
		    <ul>
									<li><i class="fas fa-envelope"></i>  fouziabalibla@gmail.com</li><br>
									<li><i class="fas fa-mobile-alt"></i>  +212 618 935 227</li><br>
									<li><i class="fas fa-map-marker-alt"> N° 600 Laghdir Youssoufia-MAROC</i></li><br>
									
								</ul>
		</div>
		<div class="col-md-3 footer-three">
		    <h4> Plan du site </h4>
		    <ul>
									<li><a href="accueil.php">Accueil</a></li><br>
									<li><a href="about.php">À propos</a></li><br>
									<li><a href="projet.php">Projets</a></li><br>
									<li><a href="contact.php">Contact</a></li><br>
								</ul>
		</div>
		
		<div class="col-md-4 footer-one">
        <h4>Où me trouver</h4>
        <br>
        <div class="social-icons"> 
              <a href="https://www.linkedin.com/in/fouzia-balibla-7bb48a171/"><i id="social-ln" class="fa fa-linkedin fa-4x social"></i></a>
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-4x social"></i></a>
               <a href="https://www.instagram.com/fouzia.bali/"><i id="social-in" class="fa fa-instagram fa-4x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-4x social"></i></a>
                <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-4x social"></i></a>
                <a href="https://github.com/balibla"><i id="social-gh" class="fab fa-github fa-4x social"></i></a>
                <a href="https://gitlab.com/balibla"><i id="social-gl" class="fab fa-gitlab fa-4x social"></i></a>
	        </div>	
		</div>
		
</div>
    
</div>  


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
