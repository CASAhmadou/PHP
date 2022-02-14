<title>Exercice12</title>
<link rel="stylesheet" href="../Exercice2/css/style.css">
    <div id=correction>
        <h1> 
<?php 
include("../fonctions/note.php");
include_once("fonctions.php");
session_start();

  if (isset($_POST['accepte'])) {
      $n=$_POST['valeur'];
      $_SESSION['post']=$_POST;
      $arrError=[];
      verifie($n,"valeur",$arrError);
      if (count($arrError)==0) {
          tab_asso($n,$t);
      }else{
          $_SESSION['error']=$arrError;
          header('location:index.php');
          exit();
      }
    }else{
      header('location:index.php');
      exit();
    }
?>
        </h1>
    </div>