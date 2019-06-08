<?php 
include 'db.php';
require 'session.php';
Session::start();


if($_SERVER['REQUEST_METHOD'] == "GET"){ 

    /** Traitement Table DetailProject */
    try{
        if(isset($_GET['id'])){
            $id = (int)($_GET['id']);
            $query = "DELETE FROM tab WHERE id = $id";
            $select = $db->query($query);
            if(!empty($select)){
                header('Location:delete.php');
                $msg = "supp success";
            } else {
                $msg="Error delete";
            }
        }
    }catch(Exception $e){
        $msg ='Exception delete';
    }

    /***************** */
   
}else{
$msg ='Erreur POST';
}
$select = $db->query('SELECT id, name, description, image FROM tab');
$tab = $select->fetchAll();
?>

<!-- HTML -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio</title>
    <link rel="icon" type="image/ico" href="img/logo.png" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">

    <!-- CSS -->
    <style>
            /* HEADER AREA */
        .bg-black{
        background-color: #2d3436;
        background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);}
        /* HEADER AREA */
        
        #imageWorks {
            width: 25% !important;
        }
        body {
        background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.8)), url("../img/background1.png"), no-repeat center center fixed,no-repeat center center fixed;
    background-size: cover;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #faf0e6;
}

        .input {
            background-color: transparent;
            border: 0px solid;
            height: 20px;
            width: 160px;
            color: white;
        }
        .main {
            margin-top: 7rem;
        }
        a {
    color: white;
    text-decoration: none;
    background-color: transparent;
}
.btn-warning {
    color: black;
    background: -webkit-linear-gradient(transparent, transparent),
                 -webkit-linear-gradient(top, rgba(213,173,109,1) 0%, rgba(213,173,109,1) 26%, rgba(226,186,120,1) 35%, rgba(163,126,67,1) 45%, rgba(145,112,59,1) 61%, rgba(213,173,109,1) 100%);
    background: -o-linear-gradient(transparent, transparent);
}
    </style>
    <!-- /CSS -->


</head>

<body>
<header>
        <div class="container-fluid bg-black ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black "style = "text-transform: uppercase;">
            <div class="container">
                <li><a href="../index.php"><img id="logo" src="img/logo.png" style="width: 40px;"> </a></li>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
               
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 65%;">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                             <a class="nav-link" href="../index.php">Accueil <span class="sr-only">(current)</span></a> </li>
                         
                         <li class="nav-item">
                                 <a class="nav-link" href="../projet.php">Projets</a>
                         </li>
                         <li class="nav-item">
                                 <a class="nav-link" href="../contact.php">Contact</a>
                         </li>
                         <form class="form-inline my-1 my-lg-0">
              <div class="col-md-2"><a href="logout.php" class="btn btn-outline-secondary" role="button">Logout</a></div>
            </form>
                         </ul>
            </div>
            </div>
           </nav>
        </div> 
    </header>
            

    <main class="main">

    <div class="container">
        <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>description</th>
                <th>image</th>    
            </tr>
            </thead>
            <tbody>
            <?php foreach($tab as $tabs):?>
            <tr id="<?=$tabs['id']; ?>">
                <td><input class="input" name="id" disabled value="<?=$tabs['id']; ?>"></td>
                <td><?=$tabs['name']; ?></td>
                <td><?=$tabs['description']; ?></td>
                <td><img id="imageWorks" src="../img/<?=$tabs['image']; ?>" alt=""></td>
                <td><button type="button" class="btn btn-warning"><a href="delete.php?id=<?=$tabs['id']; ?>"> delete</a></button></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>
        


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
        </footer>
    </main>

    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>