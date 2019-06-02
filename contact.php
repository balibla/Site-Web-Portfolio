<!DOCTYPE html>
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
    <div id="container">
    <h1>FORMULAIRE DE CONTACT</h1>  
   <div id="demo">
   
  <p class="padabove">
Si vous souhaitez me contacter pour un projet n'hésitez pas à me contacter directement ou en utilisant le formulaire, je serais heureuse de vous répondre dans les plus brefs délais.  </p>

    
  </div>   
  
  <div id="contact-wrap">   
		<div id="contact-area">
			
			<form method="post" action="mail.php" onsubmit="return(validate());" novalidate="novalidate">

        
				<input type="text" name="nom" id="nom" placeholder="Nom" required/>
				
				<input type="text" name="prenom" id="prenom" placeholder="Prénom"required/>
	
                <input type="text" name="telephone" id="telephone" placeholder="Téléphone"required/>
                
                <input type="text" name="email" id="email" placeholder="Email"required/>

				<textarea name="message" rows="20" cols="20" id="message" placeholder="Message"></textarea>

				<input type="submit" name="submit" value="envoyer" class="submit-button"/>
			</form>
        </div>
     </div>


</div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>
<!-- 
// include 'connection.php';
// $pdo=$cnx;
//     if (isset($_POST['submit'])) {
        
        

        
      
//                                 $name = $_POST['name'];
//                                 $prenom = $_POST['prenom'];
//                                 $telephone = $_POST['telephone'];
//                                 $email = $_POST['email'];
//                                 $msg = $_POST['message'];
                                

//                                 $sql='INSERT INTO contact VALUES (NULL,?,?,?,?,?,NOW())';
//                                 $q = $pdo->prepare($sql);
//                                 $q->execute(array($name,$prenom,$telephone,$email,$msg));

//                             }else{
                                // echo "zolo";
                            // }
                                
                                

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

       
   

                            