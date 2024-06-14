<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style-page-films.css" />
    <title> <?php include "variables.php"; echo $title1 ?> </title>
  </head>
  <body>
    <?php include "_navbar.php";
          include "variables.php" ?>
    <section class="banner">
      <div class="title-left">
        <h1 class="banner-title"> <?php echo $title1 ?> </h1>
        <p class="sub-title"> <?php echo "Titre original: $originalTitle1" ?> </p>
        <p class="sub-title"> <?php echo $movieDetails1 ?> </p>
      </div>
      <div class="title-right">

        <h4 class="h4size"> <?php echo $rating1 ?> </h4>

        <section class="ratings">
        <form action="process_rating.php" method="post">
          <label class="score" for="rating"> <h4 class="h4size">Ma note:</h4> </label>
          <div class="wrapper">
          <input class="ratingsInput"
            type="float"
            id="rating"
            name="rating"
            required
            minlength="1"
            maxlength="3"
            size="4"
            step="0.1"
          />           
          <button>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FFC700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h13M12 5l7 7-7 7"/></svg>
          </button> 
          </div>
        </form>
        </section>

      </div>
    </section>

    <section class="in-summary">
      <img class="posterSummary" src="img/films/fandf1.jpg" alt="movie poster" />

      <div class="summary">
        <h3>Synopsis</h3>
        <p> <?php echo $summary1 ?> </p>
        <button id="show-more-btn">Afficher plus</button>
      </div>
    </section>
    <section class="trailer">
      <?php echo $trailer1 ?>
    </section>
    <section class="actors-section">
      <h3>Casting</h3>
      <div class="actors-list">

      <?php 
        
        foreach ($actors1 as $actor) {
          echo "<div class= 'actor'>
            <img class='actor-img' src='{$actor['image']}' alt='{$actor['name']}' />
          <div class='actor-details'>
            <h4>{$actor['name']}</h4>
            <p>{$actor['role']}</p>
          </div>
        </div>";
        }
      ?>
     
      </div>
    </section>

    <section class="spec-pictures">
      <h3>Photos</h3>
      <ul class="pic-list">
      <?php
      $photos = ["fnf1.jpg", "fnf2.jpg", "fnf3.jpg", "fnf4.jpg", "fnf5.jpg"];
      foreach ($photos as $photo) {
        echo "<li><img class='pics' src='img/films/$photo' alt=''></li>";
      }
    ?>
      </ul>
    </section>

    <div id="modal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="modal-img">
    </div>

    <section class="user-reviews">
      <h3>Commentaires des utilisateurs</h3>
      <div class="all-reviews">
      <?php
     
      foreach ($reviews as $review) {
        echo "<div class='reviews'><h4>De {$review['username']}</h4><p>{$review['comment']}</p></div>";
      }
    ?>
      </div>
    </section>

    <section class="leaveReview">
    <form action="process_review.php" method="post">
    <p> Dites-nous ce que vous en avez pensé !</p>
            <div>
                <label class="inputReview" for="userName">Nom d'utilisateur : </label>
                <input type="text" id="userName" name="userName" required="true">
            </div>

            <div>
                <label class="inputReview" for="yourReview">Votre commentaire : </label>
                <textarea name="yourReview" id="yourReview" required="true" rows="8"></textarea>
            </div>
            <div class="buttonsLine">
                <button class="review-button" type="submit">Envoyer </button>
            </div>
        </form>
        </section>

    <script src="js/films.js"></script>

    <?php include "_footer.php" ?>

  </body>
</html>
