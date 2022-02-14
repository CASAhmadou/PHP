    <title>Exercice 5</title>
    <link rel="stylesheet" href="../Exercice2/css/style.css">

<div id=correction>
    
    <h1>
        <?php
        include_once ('fonctions.php');
            
            define('VAL_MIN',0);
            define('VAL_MAX', 9);
            $xA=rand(VAL_MIN,VAL_MAX);
            $yA=rand(VAL_MIN,VAL_MAX);
            $xB=rand(VAL_MIN,VAL_MAX);
            $yB=rand(VAL_MIN,VAL_MAX);
            echo "génére deux points A=(".$xA." ; ".$yA.")et B=(".$xB." ; ".$yB.")<br>";
            $dist=coord($xA,$yA,$xB,$yB);
            echo "La distance entre les points A et B, est d= ".$dist;
        ?>
    </h1>
    <div>
        <a href="../Exercice4/index.php">Precedent</a>
        <a href="../Exercice6/index.php">Suivant</a>
    </div>
</div>