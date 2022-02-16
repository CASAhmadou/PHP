    <meta charset="UTF-8">
    <title>Exercice2</title>
    <link rel="stylesheet" href="../Exercice7/css/style.css">  


    <div class="img"><img src="../Exercice7/css/logo.jpg" alt=""></div>
  <img src="../Exercice7/css/log.png" alt="#"><br>
    <div id=correction>
    
        <h1>
            <?php
            include_once("fonctions.php");

            define("VAL_MIN",1) ;
            define("VAL_MAX",200);
            $long=rand(VAL_MIN,VAL_MAX);
                echo "La longuer est  ".$long."<br><br>";
            $larg=rand(VAL_MIN,VAL_MAX);
                echo "La largeur est  ".$larg."<br><br>";
            $peri=perimetre($long,$larg);
                echo "Le perimetre est  ".$peri."<br><br>";
            $surf=surface($long,$larg);
                echo "La surface est  ".$surf."<br><br>";
            $diag=diagonale($long,$larg);
                echo "La diagonale est  ".$diag;

            ?>
        </h1>
        <div class="Exercice">
            <a href="../index.php">Prev</a>
            <a href="../Exercice3/index.php">next</a>
        </div>
    </div>