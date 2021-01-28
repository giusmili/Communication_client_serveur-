<?php
//session_start();
$_SESSION['prenom'] = "Rasmus";
$_SESSION['nom'] = "Ledorf";
$_SESSION['age'] = 18;

    include_once("./src/data.inc.php")
?>
<?php
    include_once("./src/header.inc.php")
    
?>

<body>
<header>
    <h1>Les sessions</h1>
</header>

    

    <section>
        <p>
            Hello! <?php print $_SESSION['prenom']; ?> <br>
            Tu es à l'accueil de mon site
                <strong>
                    <?php print $_SERVER['PHP_SELF'] ?>
                </strong><br>
                <a href="session_user_php.php">Veuillez vérifier vos infos</a>
        </p>
    </section>
<pre>
<?php
    // phpInfo()
?>
</pre>
<?php
    include_once("./src/footer.inc.php")
?>
</body>
</html>