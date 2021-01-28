<?php
    session_start();
    include_once("./src/data.inc.php");
?>
<?php
    include_once("./src/header.inc.php");
    
?>
<body>
<header>
    <h1>Session user</h1>
</header>
<main>
    <section>
        <h2>Votre connection</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="login">Votre login</label>
        <input type="text" name="login" id="login" placeholder="Votre login" aria-required="true" autofocus>
        <input type="submit" value="Send-me">
        </form>
    </section>
</main>
<?php
    if(isset($_POST['login'])){
        if(!$_POST['login']){
            print '<p class="warning">Saisir votre login!</p>';
        }
        else{
            $_SESSION['nom'] = $_POST['login'];
            print '<p class="success">Bonjour : '.$_SESSION['nom'].'</p>';
            print '<p class="success"><a href="success_login.php">Poursuivre vers vos informations</a></p>';
        }
    }
?>


<?php
    include_once("./src/footer.inc.php")
?>
</body>
</html>