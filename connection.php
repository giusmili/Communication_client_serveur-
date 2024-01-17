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
                &#127942;   
            </span>
                Votre espace
            </h2>
          
            <?php
            print "<p class=\"msg\">Bonjour ".$_SESSION['nom']."</p>";
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