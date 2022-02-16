<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice7</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="img"><img src="../Exercice7/css/logo.jpg" alt=""></div>
  <img src="../Exercice7/css/log.png" alt="#"><br>
    <div id=correction>
        <h1> 
<?php
    session_start();
?>
<form action="controller.php" method="post">
    <h1>DATE</h1>

    <label for="">Entrer le jour de la date</label><br>
    <input type="text" name="jour" value="<?php if(isset($_SESSION['error']['jour'])
        && isset($_SESSION['post']) ) echo  $_SESSION['post']['jour']; else ''?>"><br>

        <?php if(isset($_SESSION['error']['jour'])):?>
          <span style="color:#ff5722"><?php echo $_SESSION['error']['jour'] ?></span>
    <?php session_unset(); endif?><br><br>

    <label for="">Entrer le mois de la date</label><br>
    <input type="text" name="mois" value="<?php if(isset($_SESSION['error']['mois'])
        && isset($_SESSION['post']) ) echo  $_SESSION['post']['mois']; else ''?>"><br>

        <?php if(isset($_SESSION['error']['mois'])):?>
            <span style="color:#ff5722"><?php echo $_SESSION['error']['mois'] ?></span>
      <?php session_unset(); endif?><br><br>

    <label for="">Entrer l'année de la date</label><br>
    <input type="text" name="annee" id="" value="<?php if(isset($_SESSION['error']['annee'])
        && isset($_SESSION['post']) ) echo  $_SESSION['post']['annee']; else ''?>"><br>

        <?php if(isset($_SESSION['error']['annee'])):?>
            <span style="color:#ff5722"><?php echo $_SESSION['error']['annee'] ?></span>
      <?php session_unset(); endif?><br><br>

    <input type="submit" class="submit" name="btn_oui" value="Recherche"><br><br>

</form>
</h1>
  <div class=Exercice>
    <a href="../Exercice6/index.php">Prev</a>
    <a href="../Exercice8/index.php">next</a>
  </div>    
</div>
</body>
</html>