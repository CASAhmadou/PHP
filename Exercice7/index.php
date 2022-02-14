<title>Exercice7</title>
    <link rel="stylesheet" href="../Exercice2/css/style.css">
    <div id=correction>
        <h1> 
<?php
    session_start();
?>
<form action="controller.php" method="post">
    <h1>DATE</h1>

    <label for="">Entrer le jour de la date</label><br>
    <input type="text" name="jour" value="<?php if(isset($_SESSION['error']['jour'])
        && isset($_SESSION['post']) ) echo  $_SESSION['post']['jour']; else ''?>">

        <?php if(isset($_SESSION['error']['jour'])):?>
          <span style="color:blue"><?php echo $_SESSION['error']['jour'] ?></span>
    <?php session_unset(); endif?><br><br>

    <label for="">Entrer le mois de la date</label><br>
    <input type="text" name="mois" value="<?php if(isset($_SESSION['error']['mois'])
        && isset($_SESSION['post']) ) echo  $_SESSION['post']['mois']; else ''?>">
        <?php if(isset($_SESSION['error']['mois'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['mois'] ?></span>
      <?php session_unset(); endif?><br><br>

    <label for="">Entrer l'année de la date</label><br>
    <input type="text" name="annee" id="" value="<?php if(isset($_SESSION['error']['annee'])
        && isset($_SESSION['post']) ) echo  $_SESSION['post']['annee']; else ''?>">

        <?php if(isset($_SESSION['error']['annee'])):?>
            <span style="color:yellow"><?php echo $_SESSION['error']['annee'] ?></span>
      <?php session_unset(); endif?><br><br>

    <input type="submit" name="btn_oui" value="Recherche">

</form>
</h1>
  <div class=Exercice>
  <a href="../Exercice6/index.php">Précédent</a>
    <a href="../Exercice8/index.php">Suivant</a>
  </div>    
</div>