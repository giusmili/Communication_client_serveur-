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
            <h2>Votre espace</h2>
          
            <?php
            print "<p>Bonjour ".$_SESSION['nom']."</p>";
            ?>
            </p>

            
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