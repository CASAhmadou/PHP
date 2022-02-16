<title>Exercice11</title>
    <link rel="stylesheet" href="../Exercice7/css/style.css">

    
    <div class="img"><img src="../Exercice7/css/logo.jpg" alt=""></div>
  <img src="../Exercice7/css/log.png" alt="#"><br>
    <div id=correction>
        <h1>
<?php
   session_start();
?>

<form action="controller.php" method="post">
  
     <label for="">Saisir une valeur</label><br><br>
     <input type="text" name="valeur" value="<?php if (isset($_SESSION['error']['valeur'])
      && isset($_SESSION['post'])) echo $_SESSION['post']['valeur']; else ''?>"><br><br>
          <?php if(isset($_SESSION['error']['valeur'])): ?>
            <span style="color:brown"><?php echo $_SESSION['error']['valeur'] ?></span>
            <?php session_unset(); endif ?><br>

     <input type="submit" class="submit" name="accepte" value="accepte"><b></b>

</form>
</h1>
<div class=Exercice>
  <a href="../Exercice9/index.php">Prev</a>
    <a href="../Exercice11/index.php">next</a>
  </div>   
</div>