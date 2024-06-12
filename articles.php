<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
    <link rel="stylesheet" href="css/articles.css">
</head>

<body>
    <header>
    <?php include "_navbar.php"; ?>
    </header>
    <div class="container">
        <h1>A la Une</h1>
        <div class="headline"></div>
        <section class="articles">
            <div class="article">
                <img src="img/articles/agangster.jpg" alt="Image de l'article 1">
                <div class="content">
                    <h2>Titre de l'article 1</h2> <br>
                    <p>Texte d'introduction du film 1</p>
                </div>
            </div>
            <div class="article">
                <img src="img/articles/johnq.jpg" alt="Image du l'article 2">
                <div class="content">
                    <h2>Titre de l'article 2</h2><br>
                    <p>Texte d'introduction du film 2</p>
                </div>
            </div>
            <div class="article">
                <img src="img/articles/flight.jpg" alt="Image de l'artticle 3">
                <div class="content">
                    <h2>Titre de l'artcile 3</h2><br>
                    <p>Texte d'introduction du film 3</p>
                </div>
            </div>
            <div class="article">
                <img src="img/articles/trainingday.jpg" alt="Image de l'article 4">
                <div class="content">
                    <h2>Titre du film 4</h2><br>
                    <p>Texte d'introduction du film 4</p>
                </div>
            </div>
        </section>
    </div>
    <?php include '_footer.php' ?>
</body>

</html>