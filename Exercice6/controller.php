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
