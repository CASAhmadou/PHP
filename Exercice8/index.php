<title>Exercice8</title>
    <link rel="stylesheet" href="../Exercice7/css/style.css">

    <div class="img"><img src="../Exercice7/css/logo.jpg" alt=""></div>
  <img src="../Exercice7/css/log.png" alt="#"><br>
    <div id=correction>
        <h1> 
<?php
session_start();
?>

<form action="controller.php" method="post">

<label for="">  Entrer un nombre </label><br><br>
<input type="text" name="number" value="<?php if (isset($_SESSION['error']['number']) 
&& isset($_SESSION['post'])) echo $_SESSION['post']['number']; else '' ?>"><br>

    <?php if(isset($_SESSION['error']['number'])):?><br>
       <span style="color:red"><?php echo $_SESSION['error']['number'] ?></span>
           <?php endif ?> <br><br>

<input type="submit" class="submit" name="btn_oui" value="Recherche"><br><br>

</form>
</h1>
  <div class="Exercice">
  <a href="../Exercice7/index.php">Prev</a>
    <a href="../Exercice9/index.php">next</a>
  </div>    
</div>