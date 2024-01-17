<?php
     class ConnectUser{
        
        static function user(){

            try{// On se connecte à MySQL
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                $bdd = new PDO('mysql:host=localhost;dbname=abonnement', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
                
                // On récupère tout le contenu de la table
                $reponse = $bdd->query('SELECT login, password FROM  inscription limit 1');
        
                while($data = $reponse->fetch()){
                    $data['login'];
                    $data['password'];
        
                    //on teste les champs de notre formulaire
                    if(isset($_POST['mail']) && isset($_POST['psw'])){
                        $login = $_POST['mail'];
                        $mdp = $_POST['psw'];
        
                        if($login && password_verify($mdp,  $data['password'])){
        
                            header("Location: connection.php");
                            $_SESSION['nom'] = $login;
                        }
                        else{
                            
                            echo "<p class=\"warning\">Erreur login ou mot de passe?</p>";
                        }
                           
        
        
                        
                    }
                
                
                }
                $reponse->closeCursor();
            }
            catch(Exception $e){
                die("Erreur de connexion : ".$e->getMessage());
            }
        }
     }