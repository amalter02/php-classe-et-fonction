<?php require("exo6.php");
?>

<html>
<head>  
        <meta charset="utf-8"/>
</head>
<body>
    
    <?php

    $personnage=new Perso(1);
    $personnage->AfficherPersonnage();
    
    $personnage1=new Perso(2);
    $personnage1->AfficherPersonnage();

    $personnage->Attaque($personnage1);
    $personnage->Soins($personnage1);
?>
</body>
</html>