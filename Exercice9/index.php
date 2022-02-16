<title>Exercice9</title>
    <link rel="stylesheet" href="../Exercice7/css/style.css">

    
    <div class="img"><img src="../Exercice7/css/logo.jpg" alt=""></div>
  <img src="../Exercice7/css/log.png" alt="#"><br>
    <div id=correction>
        <h1> 
 <?php 
   session_start();
?>
<form action="controller.php" method="post">
    <label for="">Saisir un nombre</label><br>
    <input type="text" name="nombre" value="<?php if(isset($_SESSION['error']['nombre'])
    && isset($_SESSION['post'])) echo $_SESSION['post']['nombre']; else ''?>"><br><br>

      <?php if (isset($_SESSION['error']['nombre'])):?>
         <span style="color:red"><?php echo $_SESSION['error']['nombre'] ?></span>
         <?php session_unset(); endif?><br> 

    <input type="submit" class="submit" name="ok" value="VALIDER">

</form>

<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>
  </h1>
  <div class="Exercice">
    <a href="../Exercice8/index.php">Prev</a>
    <a href="../Exercice11/index.php">next</a>
  </div>    
</div> 