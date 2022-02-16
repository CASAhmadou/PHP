    <title>Exercice3</title>
    <link rel="stylesheet" href="../Exercice7/css/style.css">

    <div class="img"><img src="../Exercice7/css/logo.jpg" alt=""></div>
  <img src="../Exercice7/css/log.png" alt="#"><br>
    <div id=correction> 
        <h1>
            <?php
            include_once("fonctions.php");
    
            define('VAL_MIN',0);
            define('VAL_MAX',200);
            
            $a=rand(VAL_MIN,VAL_MAX);
                echo "Le premier nombre est  ".$a."<br><br>";
            $b=rand(VAL_MIN,VAL_MAX);
                echo "Le second nombre est  ".$b."<br><br>";
            
            $som=somme($a,$b);
                echo "La somme est  ".$som."<br><br>";
            
            $expo=exponentiel($a,$b);
                echo "L'exponentiel est  ".$expo."<br><br>";
            
            $dif=difference($a,$b);
                echo "Les valeurs   ".$dif."<br><br>";
            
            $prod=produit($a,$b);
                echo "Le produit est  ".$prod."<br><br>";
            
            $mod=modulo($a,$b);
                echo "Le modulo est  ".$mod."<br><br>";
            
            $div=division($a,$b);
            echo "La division est  ".$div."<br><br>";
            
            $car=carre($a,$b);
            echo "La carré est  ".$car;
            
            ?>
        </h1>
        <div class="Exercice">
            <a href="../Exercice2/index.php">Prev</a>
            <a href="../Exercice4/index.php">Next</a>
        </div>
    </div>      