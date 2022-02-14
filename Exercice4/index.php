    <title>Exercice4</title>
    <link rel="stylesheet" href="../Exercice2/css/style.css">
    <div id=correction>
        <h1>
            <?php
               include_once("fonctions.php");

                    define('VAL_MIN', 0);
                    define("VAL_MAX",50);

                    $x=rand(VAL_MIN,VAL_MAX);
                        echo "le premier nombre généré est ".$x."<br>";

                    $y=rand(VAL_MIN,VAL_MAX);
                        echo "le second nombre généré est ".$y."<br>";

                    echo "L'ordre avant ".$x." ; ".$y."<br>";

                permutation($x,$y);

                echo "L'ordre apprès ".$x." ; ".$y;
            ?>
        </h1>
        <div>
            <a href="../Exercice3/index.php">Precedent</a>
            <a href="../Exercice5/index.php">Suivant</a>
        </div>    
    </div> 