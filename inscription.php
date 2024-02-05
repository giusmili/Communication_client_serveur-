<?php
    session_start();
    include_once(__DIR__."/src/data.inc.php");
?>
<?php
    include_once(__DIR__."/src/header.inc.php");
    
?>
<body>
    <header>
        <h1>
            Fidelio &amp; company
        </h1>
    </header>
    <main>
        <section>
            
            <h2>
            <span aria-hidden="true">
               	
                &#9998;
            </span>
                Inscription rapide votre login &amp; mot de passe
            </h2>
            <form action="inscription.php" method="post">
            <label for="mail">Adresse mail</label>
            <input type="text" name="mail" id="mail" placeholder="Adresse mail" aria-required="true" autofocus>
            <label for="password">Mot de passe</label>
            <input type="password" name="psw" id="password" placeholder="Password">
            <input type="submit" value="Envoyer">

            </form>
        </section>
        <?php
            //inclusion inscription_user.inc
            include_once __DIR__."/controller/inscription_user.inc.php";
            RegigisterUser::register();
        ?>

    </main>

    <?php
        include_once(__DIR__."/src/footer.inc.php")
    ?>
</body>
</html>