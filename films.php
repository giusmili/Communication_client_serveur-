<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéma</title>
    <link rel="shortcut icon" href="./asset/iconfinder_film_2561438.png" type="image/png">
    <link rel="stylesheet" href="./css/film.css">
</head>
<body>
    <header>
        <h1>Films &amp; actors</h1>
    </header>
    <main>
        <ul class="desappear">
        <?php
             include_once "./src/films.inc.php";      
        ?>
        </ul>
    </main>

    <footer>
        <p>&copy; - MIT - <?php print date('Y')?></p>
    </footer>
    <script src="./js/app.js"></script>
</body>
</html>