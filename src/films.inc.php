<?php
      $host = "localhost";
      $dbase = "tuto";
      $login = "root";
      $password = "";
      try{
          $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
          $bdd = new PDO("mysql:host=$host;dbname=$dbase", "$login", "$password", 
          array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));

          $response = $bdd ->query('SELECT * FROM acteurs INNER JOIN films ON films.id_acteurs = acteurs.id ');
          
         //print($response);
          while($data = $response->fetch()){
              //print "<pre>".print_r($data)."</pre>";
              echo "<li>".$data['prenom']." ".$data['nom']." : ".$data["titre"]."</li>";
          }
        
         
          $response->closeCursor();

      }
      catch(Exception $e){
          die("Erreurs de : ".$e->getMessage()); 
      }  
?>