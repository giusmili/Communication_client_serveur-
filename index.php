<?php
    include_once('./src/data.inc.php');
?>

<?php
    require_once("./src/header.inc.php");
?>
<body>
<header>
    <h1><?php print titre ?></h1>
</header>
    <main>
    <figure>
        <?php

            include_once("./src/bdd.inc.php");
        ?>
    </figure>
    </main>
<?php
    include_once('./src/footer.inc.php');
?>
    
</body>
</html>