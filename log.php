<?php
    session_start();
    include_once("./src/data.inc.php");
?>
<?php
    include_once("./src/header.inc.php");
    
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
                <span ariq-hidden="true">
                    &#128273; 
                </span>
                Se connecter
            </h2>
            <form action="log.php" method="post">
            <label for="mail">Adresse mail</label>
            <input type="text" name="mail" id="mail" placeholder="Adresse mail" aria-required="true" autofocus>
            <label for="password">Mot de passe</label>
            <input type="password" name="psw" id="password" placeholder="Password">
            <input type="submit" value="Envoyer">

            </form>
        </section>
        <?php
           
           # connection à la bdd
          
           include_once __DIR__.'/controller/controller.class.php';
           ConnectUser::user();

        ?>
       

    </main>

    <?php
        include_once("./src/footer.inc.php")
    ?>
</body>
</html>