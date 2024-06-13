<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <?php include "_navbar.php" ?>
    <div class="contact-container">
        <h1>Nous contacter</h1>
        <div class="contact-info">
            <p>Une question? Une suggestion?</p>
            <p>N'hésitez pas à nous contacter en remplissant le formulaire ci-joint!</p>
        </div>
       
        <form action="contact.php" method="post" class="contact-form">
            <input type="text" name="name" placeholder="Votre nom" required>
            <input type="email" name="email" placeholder="Votre adresse email" required>
            <textarea name="message" placeholder="Votre message" required></textarea>
            <button type="submit">SOUMETTRE</button>
        </form>
    </div>

  <?php include "_footer.php" ?>


</body>
</html>
