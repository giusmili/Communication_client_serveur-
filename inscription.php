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
            <h2>Inscription</h2>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="mail">Adresse mail</label>
            <input type="text" name="mail" id="mail" placeholder="Adresse mail" aria-required="true" autofocus>
            <label for="password">Mot de passe</label>
            <input type="password" name="psw" id="password" placeholder="Password">
            <input type="submit" value="Envoyer">

            </form>
        </section>
        <?php
            
            try{
                $bdd=new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                    die('Erreur : '.$e->getMessage());
                }
               
                /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               
                }*/
            
            if(isset($_POST['mail']) || isset($_POST['psw'])){
                $email = $_POST["mail"];

                //on test les chaines de caractère//
                if(!$_POST['mail'] || !$_POST['psw']){
                    echo "<p class=\"warning\">Vous avez obliez votre mail ou password?</p>";
                    }
                    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        echo "<p class=\"warning\">Mail invalide</p>";
                    }
                    else if(is_numeric($email)){
                            echo "<p class=\"warning\">Vous devez saisir des caractères</p>";
                    }
                    else{

                    //password_hash($_POST['psw'],PASSWORD_DEFAULT);
                    
                    $req = $bdd->prepare('INSERT INTO user_log(login, password)VALUES(?,?)');
                    $req->execute(array($_POST['mail'], password_hash($_POST['psw'],PASSWORD_DEFAULT)));
                    
                    echo "<p class=\"success\">Merci votre contenu est ajouté : 
                            <a href=\"log.php\" title=\"pub\">Connectez vous</a>
                            
                    </p>";
                    
                }				
                
            }
        ?>

    </main>

    <?php
        include_once("./src/footer.inc.php")
    ?>
</body>
</html>