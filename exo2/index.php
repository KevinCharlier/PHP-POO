<?php 
    require 'voitures.php'; 
    $page = new Voiture();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">  
    <title>POO: Parc de voitures</title>
</head>

<body>

    <div class="title">
        <h1>Parc de Voitures</h1>
    </div>

    <?php
        echo '<h2>Ferrari - LaFerrari</h2>';
        $voiture1 = new Voiture(
        'D 34545', //Immatriculation
        '01-09-2016', //Date de Mise en Circulation
        150000, //Kilométrage
        'Ferrari', //Marque
        'LaFerrari', //Modele
        'red', //Couleur
        1630 //Poids
        );
        
        echo $voiture1->display();
        echo $voiture1->dispo();
        echo $voiture1->pays();
        echo $voiture1->km();
        echo $voiture1->age();
        echo $voiture1->usage();

        echo '</br></br></br></br>';

        echo '<h2>Audi - R8</h2>';
        $voiture2 = new Voiture(
        'BE 050692', //Immatriculation
        '19-12-2017', //Date de Mise en Circulation
        6900, //Kilométrage
        'Audi', //Marque
        'R8', //Modele
        'white', //Couleur
        3900 //Poids
        );
        
        echo $voiture2->display();
        echo $voiture2->dispo();
        echo $voiture2->pays();
        echo $voiture2->km();
        echo $voiture2->age();
        echo $voiture2->usage();
    ?>

</body>

</html>