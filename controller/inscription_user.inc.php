<?php
    class RegigisterUser{
        static function register(){
            try{
                $_bdd=new PDO('mysql:host=localhost;dbname=abonnement;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                    {
                        die('Erreur : '.$e->getMessage());
                    }
               
              
            
            if(isset($_POST['mail']) || isset($_POST['psw'])){
                $_email = $_POST["mail"];
                
                    if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                
                    }
            
                //on test les chaines de caractère//
                if(!$_POST['mail'] || !$_POST['psw']){
                    echo "<p class=\"warning\">Vous avez obliez votre mail ou password?</p>";
                    }
                    else if(!filter_var($_email, FILTER_VALIDATE_EMAIL)){ //attention à ma fonction
                        echo "<p class=\"warning\">Mail invalide</p>";
                    }
                    else if(is_numeric($_email)){
                            echo "<p class=\"warning\">Vous devez saisir des caractères</p>";
                    }
                    else{
            
                    //password_hash($_POST['psw'],PASSWORD_DEFAULT);
                    
                    $req = $_bdd->prepare('INSERT INTO inscription (login, password)VALUES(?,?)');
                    $req->execute(array($_POST['mail'], password_hash($_POST['psw'],PASSWORD_DEFAULT)));
                    
                    echo "<p class=\"success\">Merci votre contenu est ajouté : 
                            <a href=\"log.php\" title=\"pub\">Connectez vous</a>
                            
                    </p>";
                    
                }				
                
            }
        }
    }
