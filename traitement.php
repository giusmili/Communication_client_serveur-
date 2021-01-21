<?php
    //traitement
    if(function_exists($_GET['method'])){
        $_GET['method']();

    }
    function getUsers(){
        
    try{// On se connecte à MySQL
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=biblio', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
        
        // On récupère tout le contenu   
        $response = $bdd->query('SELECT titre, auteur FROM livre WHERE 1');
        $livre = array();
            while($data = $response->fetch()){
                $livre[] = $data;
               
            }
       
        $response->closeCursor();     // Termine le traitement de la requête
        print json_encode($livre);
      
    
        }
        //partie finale
        catch(Exception $e){
        // En cas d'erreur précédemment, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
        }
    }

?>