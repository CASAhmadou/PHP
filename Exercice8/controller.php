<title>Exercice8</title>
<link rel="stylesheet" href="../Exercice5/css/style.css">
    <div id=correction>
        <h1> 

<?php
include("../fonctions/note.php");
include_once("fonctions.php");

session_start();

    if (isset($_POST['btn_oui'])){
        $n=$_POST['number'];
        $_SESSION['post']=$_POST;
        $arrError=[];
        verifie($n,"number", $arrError);
        if (count($arrError)==0) {
            nombre($n);
        }else {
            $_SESSION['error']=$arrError;
            header('location:index.php');
            exit();
        }
    } else {
        header('location:index.php');
    }
    
?>
        </h1>

        <div class="Exercice">
  <a href="../Exercice8/index.php">Prev</a>
    <a href="../Exercice9/index.php">next</a>
  </div> 