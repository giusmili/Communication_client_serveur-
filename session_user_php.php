<?php
session_start();
include_once("./src/data.inc.php")
?>
<?php
    include_once("./src/header.inc.php")
    
?>
<body>
<header>
    <h1>Les sessions réponses</h1>
</header>
    <section>
        <p>
            Bonjour! Vous êtes le : <?php print date("d/m/Y")?>
            je me souviens de toi! Tu t'appelles
            <?php echo $_SESSION['prenom']. " " .$_SESSION['nom'].
            "<br> Tu as ".$_SESSION['age']." ans? C'est ça? "
            ?>
            
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
<?php
    //session_destroy();
?>