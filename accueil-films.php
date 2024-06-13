<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Films</title>
    <link rel="stylesheet" href="css/accueil-films.css">
</head>
<body>
    <?php include "_navbar.php"; ?>
    <section class="container">
        <h1 >Films</h1>
        <div class="film-grid">
            <?php
            $films = json_decode(file_get_contents('accueil-films.json'), true);
            foreach ($films as $film) {
                echo '<div class="film">';
                echo '<a href="page-films.php?id=' . $film['id'] . '">';
                echo '<img src="' . $film['poster'] . '" alt="' . $film['title'] . '">';
                echo '<h2>' . $film['title'] . '</h2>';
                echo '<p>Note: ' . $film['rating'] . '/10</p>';
                echo '</a>';
                echo '</div>';
            }
            ?>
        </div>
        </section>
            <div ><?php include "_footer.php"; ?></div>
   
</body>
</html>
