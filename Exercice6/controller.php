
<link rel="stylesheet" href="../Exercice5/css/style.css">

<h1>
<?php 
include("../fonctions/note.php");
include_once("fonctions.php");

  session_start();
if(isset($_POST['btn_ok'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    verifie($a,"a",$arrError);
    verifie($b,"b",$arrError);
    verifie($c,"c",$arrError);
    if(count($arrError)==0){
        equationSecondDegre($a,$b,$c);
    }else{
        $_SESSION['error']=$arrError;
       // var_dump( $_SESSION);
        header('location:index.php'); 
        exit();
    }
}else{
      
    //Redirection
    header('location:index.php');
    exit();
}
?>
</h1>

<div class="Exercice">
    <a href="../Exercice6/index.php">Prev</a>
    <a href="../Exercice7/index.php">next</a>
  </div>    
