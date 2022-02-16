<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice6</title>
    <link rel="stylesheet" href="../Exercice7/css/style.css">
    
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
            <label for="">Entrer a</label><br>
            <input type="text" name="a" id="" value="<?php if(isset($_SESSION['error']['a'])
              && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else ''?>"> <br>

            <?php if(isset($_SESSION['error']['a'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
            <?php session_unset(); endif?><br><br>

            <label for="">Entrer b</label><br>
            <input type="text" name="b" id="" value="<?php if(isset($_SESSION['error']['b'])
            && isset($_SESSION['post']) ) echo  $_SESSION['post']['b']; else ''?>" ><br>

            <?php if(isset($_SESSION['error']['b'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
            <?php session_unset(); endif?><br><br>

            <label for="">Entrer c</label><br>
            <input type="text" name="c" id="" value="<?php if(isset($_SESSION['error']['c'])
            && isset($_SESSION['post']) ) echo  $_SESSION['post']['c']; else ''?>"><br>

            <?php if(isset($_SESSION['error']['c'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
            <?php session_unset(); endif?><br><br><br>

           <input type="submit" class="submit" name="btn_ok" id="" value="Valide">


</form>

<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>
  </h1>
  <div class="Exercice">
    <a href="../Exercice5/index.php">Prev</a>
    <a href="../Exercice7/index.php">next</a>
  </div>    
</div> 
</body>
</html>