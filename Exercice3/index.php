    <title>Exercice3</title>
    <link rel="stylesheet" href="../Exercice2/css/style.css">

    <div id=correction> 
        <h1>
            <?php
            include_once("fonctions.php");
    
            define('VAL_MIN',0);
            define('VAL_MAX',200);
            
            $a=rand(VAL_MIN,VAL_MAX);
                echo "Le premier nombre est ".$a."<br>";
            $b=rand(VAL_MIN,VAL_MAX);
                echo "Le second nombre est ".$b."<br>";
            
            $som=somme($a,$b);
                echo "La somme est ".$som."<br>";
            
            $expo=exponentiel($a,$b);
                echo "L'exponentiel est ".$expo."<br>";
            
            $dif=difference($a,$b);
                echo "Les valeurs ".$dif."<br>";
            
            $prod=produit($a,$b);
                echo "Le produit est ".$prod."<br>";
            
            $mod=modulo($a,$b);
                echo "Le modulo est ".$mod."<br>";
            
            $div=division($a,$b);
            echo "La division est ".$div."<br>";
            
            $car=carre($a,$b);
            echo "La carré est ".$car;
            
            ?>
        </h1>
        <div>
            <a href="../Exercice2/index.php">Precedent</a>
            <a href="../Exercice4/index.php">Suivant</a>
        </div>
    </div>      