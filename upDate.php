<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire pour mettre à jour un utilisateur</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
 <header>
      <h1>Formulaire pour mettre à jour des données</h1>
 </header>
 <main>
 <section>
 <h1>Mis à jour</h1>
 <?php
    include_once('./src/user.inc.php');
 ?>
    <form action="upDate.php" method="post">
      <p>Nom : <input type="text" name="nom"></p>
      <p>Age : <input type="text" name="age"></p>
      <p>Civilité : <input type="text" name="civilite"></p>
      <p>ID utilisateur : <input type="text" name="id"></p>
      <p><input type="submit" name="send" value="Update"></p>
    </form>
  </section>
  </main>
  </body>
</html>