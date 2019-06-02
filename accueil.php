<?php

    include "php/conf.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
    
<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/accueil.css">
    <title>accueil</title>
    <link rel="icon" type="image/ico" href="img/logo.png" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <!-- nav -->
    <header>
        <div class="container-fluid bg-black">
        
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top"style = "text-transform: uppercase;">
            <div class="container">

            
            
                <li><a href="accueil.php"><img id="logo" src="img/logo.png" style="width: 40px;"> </a></li>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                                 <!-- lang -->
          <?php
				$flag = "https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_France.png"; 
				$name = "Français";
				if (isset($_GET['lang'])){
					if($_GET['lang'] == 'en'){
						$flag = "https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png";
						$name  = "English";
					}	
					
				}
				?>
<div class="switch-lang"> 
  <li class="current-lang"><img class="lang-flag" src="<?= $flag?>"/>
    <a class="lang-text" href="accueil.php?lang=fr"><?=$name?></a>
  </li>
  <div class="lang-dropdown">
    
    <li class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_France.png"/>
      <a class="lang-text" href="accueil.php?lang=fr">Français</a>
    </li>
    
		<li class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
    <a class="lang-text" href="accueil.php?lang=en">English</a>
  </li>
  </div>
</div>


<!-- end lang -->
                 
               
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                             <a class="nav-link" href="accueil.php"><?php echo $lang['1'] ?> <span class="sr-only">(current)</span></a> </li>
                         <li class="nav-item">
                             <a class="nav-link" href="about.php"><?php echo $lang['2'] ?></a>
                         </li>
                         <li class="nav-item">
                                 <a class="nav-link" href="projet.php"><?php echo $lang['3'] ?></a>
                         </li>
                         <li class="nav-item">
                                 <a class="nav-link" href="contact.php"><?php echo $lang['4'] ?></a>
                         </li>
               
                         <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            FRA
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">AR</a>
                                      <a class="dropdown-item" href="#">EN</a>
                                    </div>
                                  </li> -->
                         </ul>
                        
                               
            </div>
            </div>
           </nav>
        </div>
  
      
    </header>

    <!--1 partie-->
    


    
    <section class="tete" >      
                <div class="DW" data-aos="zoom-in-right">
                        <img src="img/pho2.png" alt="fouzia" height="200" width="200">
                        <br><br><br><br><br>
                        <div class="typewriter" >
                        <h2><?php echo $lang['5'] ?></h2>
                        </div>
                        <br>
                        <h1>BALIBLA FOUZIA</h1>
                        <br><br>
                        <a href="contact.php" class="button01 gold marginRight05px"><?php echo $lang['6'] ?>   <i class="fas fa-envelope"></i></a>

                </div>
                <div id="particles-js"> 
                </div> 
                <script src="js/accueil.js"></script>
                
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                AOS.init();
                </script>
        </section>
         <!--2 partie--> 

 <section id="zolo">
     <div class="heading">
            <h2><?php echo $lang['7'] ?></h2>
          </div>
          <div class="yellow-divider">
          
        </div>
      
        <div class="card-deck">
            <div class="card">
              <div class="card-body box1">
                <p class="card-text"><?php echo $lang['8'] ?> <br>
                <?php echo $lang['9'] ?> <em><?php echo $lang['10'] ?></em>
                  <br><br>
                  <?php echo $lang['11'] ?><em><?php echo $lang['12'] ?></em> <br>
                  <?php echo $lang['13'] ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><?php echo $lang['14'] ?></small>
              </div>
              <div class="bg"></div>
            </div>
            <div class="card">
              <div class="card-body box2">
                <p class="card-text"><?php echo $lang['15'] ?> <br>
                  <br>
                  <?php echo $lang['16'] ?> <em>HTML, CSS, JavaScript </em><?php echo $lang['17'] ?><br> 
                  <?php echo $lang['18'] ?> <em>SQL,PHP</em> <?php echo $lang['19'] ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><?php echo $lang['20'] ?></small>
              </div>
              <div class="bg"></div>

            </div>
            <div class="card">
              <div class="card-body box3">
                <p class="card-text"><?php echo $lang['21'] ?><br>
                  <br>  
                  <?php echo $lang['22'] ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><?php echo $lang['23'] ?></small>
              </div>
              <div class="bg"></div>

            </div>
          </div>
        </section>

        

<!--3 Partie-->


<div class="titre">
        <h2>TECHNOLOGIES</h2>
      </div>
      <div class="yellow-divider">
                    
    </div>
   
<section id="Tech" class="services-section section-space-padding">
        
        <div class="container">   
            <div class="row margin-top-30">
            
            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                        <i class="fab fa-html5"></i>
                    <h3>HTML 5</h3>
                    <hr>
                </div>
            </div>
  
            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                        <i class="fab fa-css3-alt"></i>
                    <h3>CSS 3</h3>
                    <hr>
                </div>
            </div>
  
            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                        <i class="fab fa-bootstrap"></i>     
                       <h3>BOOTSTRAP</h3>
                    <hr>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                        <i class="fab fa-js"></i>
                    <h3>JAVASCRIPT</h3>
                    <hr>
                </div>
            </div>
  
            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                        <i class="fas fa-database"></i>                       
                         <h3>SQL</h3>
                    <hr>
                </div>
            </div>
  
            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                        <i class="fab fa-php"></i>
                    <h3>PHP</h3>
                    <hr>
                </div>
            </div>
            
            </div>
  
        </div>
    </section>

    <!-- 4 partie -->
    
          </section>
          <div class="titree">
            <h2><?php echo $lang['24'] ?></h2>
          </div>
          <div class="yellow-divider">
                        
        </div>
          <section id="testimonials-area" class="testimonials-area">
				<div class="container wrapper">
					<div class="yellow-bg ">
						<div class="testimonials-bloc wow fadeInUp">
							<div id="carousel-test" class="carousel slide" data-ride="carousel">
							  <!-- slider wrapper -->
							  <div class="carousel-inner">
							  		<div class="yellow-header">
							    	</div>
								    <div class="carousel-item active">
								    	<img src="img/ys.jpg">
										<div class="test-content">
											<i class="fas fa-quote-right"></i>
										   <p>
                       <?php echo $lang['25'] ?>
											</p>
											<p class="test-name">Youssef OUADID</p>
											<p class="test-job"><?php echo $lang['26'] ?></p>
										</div>
								    </div>
								    <div class="carousel-item">
								    	<img src="img/dl.jpg">
										<div class="test-content">
											<i class="fas fa-quote-right"></i>
										   <p>
                       <?php echo $lang['27'] ?>
											</p>
											<p class="test-name">Dalila BOUTOUMILATE</p>
											<p class="test-job"><?php echo $lang['28'] ?></p>
										</div>
								    </div>
								    <div class="carousel-item">
								    	<img src="img/yn.jpg">
										<div class="test-content">
											<i class="fas fa-quote-right"></i>
										   <p>
                       <?php echo $lang['29'] ?> 
											</p>
											<p class="test-name">Younes AGAZZOUM</p>
											<p class="test-job"><?php echo $lang['30'] ?><br><?php echo $lang['31'] ?></p>
										</div>
								    </div>
								      
								    <!-- indidators -->
									  <ol class="carousel-indicators">
									    <li data-target="#carousel-test" data-slide-to="0" class="active"></li>
									    <li data-target="#carousel-test" data-slide-to="1" class=""></li>
									    <li data-target="#carousel-test" data-slide-to="2" class=""></li>
									  </ol>
							  </div>
							</div>
							<div class="test-comment">
								<p>
                <?php echo $lang['32'] ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
          <!-- footer -->

          <footer class="footer-section">
                <div class="foo">
                  <div class="box-1">
                    <p class="co"><?php echo $lang['33'] ?> <br> <br><?php echo $lang['34'] ?> </p>
                    <br>
                    <p class="e-mail">
                        <i class="fas fa-envelope"></i> fouziabalibla@gmail.com
                    </p>
                    <br>
                    <p class="phone">
                        <i class="fas fa-mobile-alt"></i> +212 618 935 227
                    </p>
                    <br>
                    <P class="localisation">
                      <i class="fas fa-map-marker-alt"> N° 600 Laghdir Youssoufia-<?php echo $lang['35'] ?></i>
                    </P>       
                  </div>
                  <div class="box-2">
                      
                      
			<h5><?php echo $lang['36'] ?></h5>
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
                  
                </footer>
               
                <!-- footer end -->



















               
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>