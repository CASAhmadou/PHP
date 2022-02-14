    <meta charset="UTF-8">
    <title>Exercice2</title>
    <link rel="stylesheet" href="../Exercice2/css/style.css">   

    <div id=correction>
        <h1>
            <?php
            include_once("fonctions.php");

            define("VAL_MIN",1) ;
            define("VAL_MAX",200);
            $long=rand(VAL_MIN,VAL_MAX);
                echo "La longuer est".$long."</br>";
            $larg=rand(VAL_MIN,VAL_MAX);
                echo "La largeur est".$larg."</br>";
            $peri=perimetre($long,$larg);
                echo "Le perimetre est".$peri."</br>";
            $surf=surface($long,$larg);
                echo "La surface est".$surf."</br>";
            $diag=diagonale($long,$larg);
                echo "La diagonale est".$diag;

            ?>
        </h1>
        <div>
            <a href="../index.php">Precedent</a>
            <a href="../Exercice3/index.php">Suivant</a>
        </div>
    </div>