<?php include '../admin/db.php'; ?>
<?php
require '../admin/session.php';

     /**Traitement du formulaire */
     
   
     if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['submit'])
     {   
         try{
             if(isset($_POST['username']) && isset($_POST['password'])){
                 $username = $db->quote($_POST['username']);
                 $password = $db->quote($_POST['password']);
                 $select = $db->query("select * from user where username = $username and password = $password");
                
                 if($select->rowCount() > 0){
                     Session::set('auth',$select->fetch());
                     session_start();
                     $_SESSION['user']=$_POST['username'];
                     header("Location:add.php");
                     die;
                 }
             }
         }catch(Exception $e){
            //   echo('Exception');
         }
       
     }  
     else{
        //   echo('Erreur GET');
     }
?>


<!-- HTML -->
   <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" type="image/ico" href="img/logo.png" />


    <!-- CSS -->
    <style>
        * {
    box-sizing: border-box;
    font-family: sans-serif;
}
.bg-black{
  background-color: #2d3436;
  background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);}

body {
    background:url(../img/background.jpg) no-repeat center center fixed;
    background-size: cover;
}

.login {
    width: 340px;
    height: 500px;
    border: 4px solid #CCC;
    background: black;
    background-size: cover;
    margin: 88px auto;
    border-radius: 14px;
}

.login .form {
    width: 100%;
    height: 100%;
    padding: 15px 20px;
    ;
}

.login .form h2 {
    color: #FFF;
    font-family: 'Alex Brush';
    text-align: center;
    font-weight: normal;
    font-size: 40px;
    margin-top: 40px;
    margin-bottom: 70px;
}

.login .form input {
    width: 100%;
    height: 40px;
    margin-top: 20px;
    background: rgba(255, 255, 255, .0);
    border: 2px solid rgba(255, 255, 255, .7);
    padding: 0 15px;
    color: #FFF;
    border-radius: 14px;
    font-size: 14px;
}

.login .form input:focus {
    border: 1px solid rgba(255, 255, 255, .8);
    outline: none;
}

 ::-webkit-input-placeholder {
    color: #DDD;
}




.login input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    background: rgba(255, 255, 255, .8);
    color: #000;
    font-size: 18px;
    border-radius: 20px;
}

.login input[type="submit"]:hover {
    cursor: pointer;
    background: #D5AD6D;
    color: #000;
}

.login a {
    text-decoration: none;
    font-size: 12px;
    line-height: 24px;
    color: darkgrey;
}

.login .mar {
    margin-top: 28px
}

.login a:hover {
    color: #ff3e6d;
}
    </style>
<!-- CSS -->

</head>
<body>

	<div class="login">
		<div class="form">
        <li><a href="index.php"><img id="logo" src="img/logo.png" style="width: 40px;"> </a></li>

            <h2>Welcome</h2>
                <form action="<?php echo $_SERVER["PHP_SELF"]?> " METHOD="POST">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input name="submit" type="submit" value="Sign In" class="submit">
                    <div class="mar">
                        <a href="#">Mot de passe oublié?</a><br>
                        <a href="signup.php">Créer un compte</a>
                    </div>
                </form>
		</div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	

</body>
</html>