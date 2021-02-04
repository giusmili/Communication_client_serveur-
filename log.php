<?php
    session_start();
    include_once("./src/data.inc.php");
?>
<?php
    include_once("./src/header.inc.php");
    
?>
<body>
    <main>
        <section>
            <h2>Se connecter</h2>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label for="mail">Adresse mail</label>
            <input type="text" name="mail" id="mail" placeholder="Adresse mail" aria-required="true" autofocus>
            <label for="password">Mot de passe</label>
            <input type="password" name="psw" id="password" placeholder="Password">
            <input type="submit" value="Envoyer">

            </form>
        </section>
        <?php
            try{// On se connecte à MySQL
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                $bdd = new PDO('mysql:host=localhost;dbname=inscription', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
                
                // On récupère tout le contenu de la table livre
                $reponse = $bdd->query('SELECT login,password FROM  user_log limit 1');

                while($data = $reponse->fetch()){
                    $data['login'];
                    $data['password'];
                    
                    if(isset($_GET['mail']) && isset($_GET['psw'])){
                        $login = $_GET['mail'];
                        $mdp = $_GET['psw'];

                        if(!$login || !$mdp){
                            echo "<p class=\"warning\">Vous avez obliez votre mail ou password?</p>";
                        }
                        else if($login!=$data['login'] && $mdp!=$data['password']){
                            echo "<p class=\"warning\">Erreur login ou mot de passe?</p>";
                        }
                        else{
                            echo "<p class=\"success\">Votre login est ".$login."
                            votre mot de passe est ".md5($mdp)."</p>";
                        }

                        
                    }
                
                
                }
                $reponse->closeCursor();
            }
            catch(Exception $e){
                die("Erreur de connexion : ".$e->getMessage());
            }

        ?>
       

    </main>

    <?php
        include_once("./src/footer.inc.php")
    ?>
</body>
</html>