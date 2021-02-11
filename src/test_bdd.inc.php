<?php
    //selectionner la base
    $host = 'localhost';
    $dbname=  'product';
    $login = 'root';
    $mdp = '';
    
    //$bdd = new PDO('mysql:host=localhost;dbname=product', 'root', '');
   $bdd = new PDO("mysql:host=$host;dbname=$dbname","$login","$mdp");
  
    
    // On récupère tout le contenu   
    $reponse = $bdd->query('SELECT * FROM `articles` WHERE 1');
    
    // On affiche chaque entrée une à une
    while ($donnee = $reponse->fetch()){
        
        //print_r($donnee);
    

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

?>
