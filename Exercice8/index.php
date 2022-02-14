<title>Exercice8</title>
    <link rel="stylesheet" href="../Exercice2/css/style.css">
    <div id=correction>
        <h1> 
<?php
session_start();
?>

<form action="controller.php" method="post">

<label for="">  Entrer un nombre </label><br>
<input type="text" name="number" value="<?php if (isset($_SESSION['error']['number']) && isset($_SESSION['post'])) 
echo $_SESSION['post']['number']; else '' ?>">

    <?php if(isset($_SESSION['error']['number'])):?>
       <span style="color:black"><?php echo $_SESSION['error']['number'] ?></span>
           <?php endif ?> <br><br>

<input type="submit" name="btn_oui" value="Recherche">

</form>
</h1>
  <div>
  <a href="../Exercice7/index.php">Précédent</a>
    <a href="../Exercice9/index.php">Suivant</a>
  </div>    
</div>