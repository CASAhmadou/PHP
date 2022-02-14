<title>Exercice6</title>
    <link rel="stylesheet" href="../Exercice2/css/style.css">
    <div id=correction>
        <h1> 
 <?php 
   session_start();
?>
<form action="controller.php" method="post">
    <label for="">Entrer a</label>
      <input type="text" name="a" id="" value="<?php if(isset($_SESSION['error']['a'])
       && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else ''?>"> 
      <?php if(isset($_SESSION['error']['a'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
      <?php session_unset(); endif?><br><br>
    <label for="">Entrer b</label>
      <input type="text" name="b" id="" value="<?php if(isset($_SESSION['error']['b'])
       && isset($_SESSION['post']) ) echo  $_SESSION['post']['b']; else ''?>" >
      <?php if(isset($_SESSION['error']['b'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
      <?php session_unset(); endif?><br><br>
    <label for="">Entrer c</label>
      <input type="text" name="c" id="" value="<?php if(isset($_SESSION['error']['c'])
       && isset($_SESSION['post']) ) echo  $_SESSION['post']['c']; else ''?>">
        <?php if(isset($_SESSION['error']['c'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
        <?php session_unset(); endif?><br><br>

      <input type="submit" name="btn_ok" id="" value="Valide">


</form>

<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>
  </h1>
  <div>
    <a href="../Exercice5/index.php">Précédent</a>
    <a href="../Exercice7/index.php">Suivant</a>
  </div>    
</div> 