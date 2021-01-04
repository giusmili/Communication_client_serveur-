<?php
    //selectionner la base
    try{// On se connecte à MySQL
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=product', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    
    // On récupère tout le contenu   
    $reponse = $bdd->query('SELECT * FROM `articles` WHERE 1');
    
    // On affiche chaque entrée une à une
    while ($donnee = $reponse->fetch()){
    echo '<h2>'.$donnee['nom'].'</h2>
    <figure>
        <figcaption>
            <ul>
                <li>Marque '.$donnee['marque'].'</li>
                <li>Capacité '.$donnee['capacite'].'</li>
                <li>Consommation '.$donnee['consommation'].'KW</li>
                <li>Prix '.$donnee['prix'].'&euro;</li>
                <li><img src="'.$donnee['image'].'" alt="produit"></li>

            </ul>
        </figcaption>
    </figure>';
         

     
      // echo "<pre>".print_r($donnee)."</pre>";
       }
    $reponse->closeCursor(); // Termine le traitement de la requête

    }
    //partie finale
    catch(Exception $e){
    // En cas d'erreur précédemment, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
    }
?>
