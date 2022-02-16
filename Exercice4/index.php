    <title>Exercice4</title>
    <link rel="stylesheet" href="../Exercice7/css/style.css">

    <div class="img"><img src="../Exercice7/css/logo.jpg" alt=""></div>
  <img src="../Exercice7/css/log.png" alt="#"><br>
    <div id=correction>
        <h1>
            <?php
               include_once("fonctions.php");

                    define('VAL_MIN', 0);
                    define("VAL_MAX",50);

                    $x=rand(VAL_MIN,VAL_MAX);
                        echo "le premier nombre généré est ".$x."<br><br>";

                    $y=rand(VAL_MIN,VAL_MAX);
                        echo "le second nombre généré est ".$y."<br><br>";

                    echo "L'ordre avant ".$x." ; ".$y."<br><br>";

                permutation($x,$y);

                echo "L'ordre apprès ".$x." ; ".$y;
            ?>
        </h1>
        <div class="Exercice">
            <a href="../Exercice3/index.php">Prev</a>
            <a href="../Exercice5/index.php">Next</a>
        </div>    
    </div> 