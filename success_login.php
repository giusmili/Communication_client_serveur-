<?php
    session_start();
    include_once("./src/data.inc.php");
?>
<?php
    include_once("./src/header.inc.php");
    
?>
<body>
<header>
    <h1><?php print "Welcome ".$_SESSION["nom"]?></h1>
</header>
<main>
    <section>
        <p class="success">Hello! Vous êtes <?php echo $_SESSION["nom"]. " nous sommes le ". date("d/m/Y");?></p>
    </section>
</main>
<?php
    include_once("./src/footer.inc.php")
?>
</body>
</html>
<?php
    session_destroy();
?>