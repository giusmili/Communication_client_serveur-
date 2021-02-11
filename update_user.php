<?php
    include_once("./src/data.inc.php");
    include_once("./src/header.inc.php");
    
?>
<header>
    <h1>Mettre à jour des données</h1>
</header> 
<main>
    <section>
        <h2>Mis à jour utilisateurs</h2>
        <?php
            //inclusion
            include_once("./src/users.inc.php");

        ?>
        <form action="update_user.php" method="post">
        <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom" autofocus>
            <label for="age">Age</label>
            <input type="text" name="age" id="age" placeholder="Age">
            <label for="civilite">Civilité</label>
            <input type="text" name="civilite" id="civilite" placeholder="Civilité">
            <label for="id">Identifiant</label>
            <input type="text" name="id" id="id" placeholder="Identifiant">

            <input type="submit" name="send" value="Update">
        </form>
    </section>
</main>
<?php
    include_once("./src/footer.inc.php");

?>