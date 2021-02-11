<?php
    include_once('./src/data.inc.php');
?>

<?php
    require_once("./src/header.inc.php");
?>
<body>
<header>
    <h1>&gt;_<?php print titre ?></h1>
</header>
    <main>
    
        <?php

            include_once("./src/test_bdd.inc.php");
        ?>
    
    </main>
<?php
    include_once('./src/footer.inc.php');
?>
    
</body>
</html>