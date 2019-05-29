d<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contact.css">
    <title>contact</title>
    <link rel="icon" type="image/ico" href="img/logo.png" />
</head>
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
                             <a class="nav-link" href="accueil.php">Accueil <span class="sr-only">(current)</span></a> </li>
                         <li class="nav-item">
                             <a class="nav-link" href="about.php">À propos</a>
                         </li>
                         <li class="nav-item">
                                 <a class="nav-link" href="projet.php">Projets</a>
                         </li>
                         <li class="nav-item active">
                                 <a class="nav-link" href="contact.php">Contact</a>
                         </li>
                        
                         </ul>
                        
                               
            </div>
            </div>
           </nav>
        </div>
      
    </header>
    <section>

    
    <div class="title">
        <h1>FORMULAIRE DE CONTACT</h1>
    </div>
    <div class="contact-form">
        <form id="contact-form" method="post"  >

        <label for="name">Nom :</label>
        <input name="name" type="text" class="form-control" placeholder="Nom" required>
        <br>
        <label for="name">Prénom :</label>
        <input name="prenom" type="text" class="form-control" placeholder="Prénom" required>
        <br>
        
        <label for="name">Email :</label>
        <input name="email" type="email" class="form-control" placeholder="Email" required>
        <br>
        <label for="name">Message :</label>
        <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea><br>

         <input type="submit" name="submit" class="form-control submit " value="envoyer"> 
        </form>
    </div>
    <div class="fouzi">
      <h3>fouzia BALIBLA</h3>
      <p>Développeuse Web à YouCode</p>
      <p class="e-mail">
          <i class="fas fa-envelope"></i> fouziabalibla@gmail.com
      </p>
      <p class="phone">
          <i class="fas fa-mobile-alt"></i> +212 618 935 227
      </p>
      <P class="localisation">
          <i class="fas fa-map-marker-alt"> N° 600 Laghdir Youssoufia-MAROC</i>
      </P>
      
    </div>
    </section>
    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>
<?php
include 'connection.php';
$pdo=$cnx;
    if (isset($_POST['submit'])) {
        
        

        
      
                                $name = $_POST['name'];
                                $prenom = $_POST['prenom'];
                                $email = $_POST['email'];
                                $msg = $_POST['message'];
                                

                                $sql='INSERT INTO contact VALUES (NULL,?,?,?,?,NOW())';
                                $q = $pdo->prepare($sql);
                                $q->execute(array($name,$prenom,$email,$msg));

                            }else{
                                // echo "zolo";
                            }
                                
                                

                                // $email_subject = "New Form Submission";

                                // $email_body = "User Name: $name.\n".
                                //                  "User fname: $visitor.\n".
                                //                  "user email: $email.\n".
                                //                      "User Message: $message.\n".
                                //                      "user phone: $téléphone.\n";
                                                     
                                // $to = $email;

                                // $headers = "Form: $email \r\n";

                                // $headers .= "Reply-To: $visitor_email \r\n";

                                // mail($to,$email_subject,$email_body,$headers);

       
   

                                ?>