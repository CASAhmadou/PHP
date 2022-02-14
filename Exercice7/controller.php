<title>Exercice7</title>
<link rel="stylesheet" href="../Exercice2/css/style.css">
    <div id=correction>
        <h1> 
<?php
include("../fonctions/note.php");
include_once("fonctions.php");
session_start();


    if (isset($_POST['btn_oui'])){
        $j=$_POST['jour'];
        $m=$_POST['mois'];
        $a=$_POST['annee'];
        $_SESSION['post']=$_POST;
        $arrError=[];
        verifie($j,"jour",$arrError);
        if (count($arrError)==0) {
          precedent($j,$m,$a);
          suivant($j,$m,$a);
        }else {
            $_SESSION['error']=$arrError;
            header('location:index.php');
            exit();
        }
    }else {
        header('location:index.php');
        exit();
    }
?>
</h1>
    </div>