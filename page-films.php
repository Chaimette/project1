<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style-page-films.css" />
    <title>Projet 1</title>
  </head>
  <body>
    <?php include "_navbar.php";
          include "variables.php" ?>
    <section class="banner">
      <div class="title-left">
        <h1 class="banner-title"> <?php echo $title ?> </h1>
        <p class="sub-title"> <?php echo $originalTitle ?> </p>
        <p class="sub-title"> <?php echo $movieDetails ?> </p>
      </div>
      <div class="title-right">

        <h4 class="h4size"> <?php echo $rating ?> </h4>

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
            maxlength="2"
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
        <p>
          La nuit tombée, Dominic Toretto règne sur les rues de Los Angeles à la
          tête d'une équipe de fidèles qui partagent son goût du risque, sa
          passion de la vitesse et son culte des voitures de sport lancées à
          plus de 250 km/h dans des rodéos urbains d'une rare violence. Ses
          journées sont consacrées à bricoler et à relooker des modèles haut de
          gamme, à les rendre toujours plus performants et plus voyants, à
          organiser des joutes illicites où de nombreux candidats s'affrontent
          sans merci sous le regard énamouré de leurs groupies. <span class="more-text"> A la suite de
          plusieurs attaques de camions, la police de L.A. décide d'enquêter sur
          le milieu des street racers. Brian, un jeune policier, est chargé
          d'inflitrer la bande de Toretto, qui figure, avec celle de son rival
          Johnny Tran, au premier rang des suspects. </span>
        </p>
        <button id="show-more-btn">Afficher plus</button>
      </div>
    </section>
    <section class="trailer">
      <iframe
        class="video-trailer"
        width="700"
        height="420"
        src="https://www.youtube-nocookie.com/embed/Zcosa9LUaE0?si=zmSqESPOPBRbqWd-"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen
      ></iframe>
    </section>
    <section class="actors-section">
      <h3>Casting</h3>
      <div class="actors-list">

      <?php 
        
        foreach ($actors as $actor) {
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
