<title>Exercice9</title>
    <link rel="stylesheet" href="../Exercice2/css/style.css">
    <div id=correction>
        <h1> 
 <?php 
   session_start();
?>
<form action="controller.php" method="post">
    <label for="">Saisir un nombre</label><br>
    <input type="text" name="nombre" value="<?php if(isset($_SESSION['error']['nombre'])
    && isset($_SESSION['post'])) echo $_SESSION['post']['nombre']; else ''?>"><br>

      <?php if (isset($_SESSION['error']['nombre'])):?>
         <span style="color:red"><?php echo $_SESSION['error']['nombre'] ?></span>
         <?php session_unset(); endif?><br> 

    <input type="submit" name="ok" value="VALIDER">

</form>

<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>
  </h1>
  <div>
    <a href="../Exercice8/index.php">Précédent</a>
    <a href="../Exercice11/index.php">Suivant</a>
  </div>    
</div> 