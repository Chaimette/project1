<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style-page-films.css" />
    <title>Projet 1</title>
  </head>
  <body>
    <header id="header">
      <div class="title-left">
        <h1 class="title">Fast and Furious</h1>
        <p class="sub-title">Titre original: The Fast and the Furious</p>
        <p class="sub-title">Film - 2001 - PG-13 - Durée: beaucoup trop long</p>
      </div>
      <div class="title-right">
        <p>Note des spectateurs:  5.8 /10</p>
        <section class="ratings">
          <label class="score" for="rating"> <h3>Ma note:</h3> </label>
    
          <input class="ratingsInput"
            type="float"
            id="rating"
            name="rating"
            required
            minlength="1"
            maxlength="2"
            size="5"
          />
        </section>
      </div>
    </header>

    <section class="in-summary">
      <img class="poster" src="img/films/fandf1.jpg" alt="movie poster" />

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
          sans merci sous le regard énamouré de leurs groupies. A la suite de
          plusieurs attaques de camions, la police de L.A. décide d'enquêter sur
          le milieu des street racers. Brian, un jeune policier, est chargé
          d'inflitrer la bande de Toretto, qui figure, avec celle de son rival
          Johnny Tran, au premier rang des suspects.
        </p>
      </div>
    </section>
    <section class="trailer">
      <iframe
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
        <div class="actor">
          <img
            class="actor-img"
            src="https://fastly.picsum.photos/id/827/200/300.jpg?hmac=0Q7y5JGXuxSXgO7VUvdNhXC4yoAupOJiKmRS9RoPqs8"
            alt="Acteur 1"
          />
          <div class="actor-details">
            <h4>Vin Diesel</h4>
            <p>Dominic Toretto</p>
          </div>
        </div>
        <div class="actor">
          <img
            class="actor-img"
            src="https://fastly.picsum.photos/id/827/200/300.jpg?hmac=0Q7y5JGXuxSXgO7VUvdNhXC4yoAupOJiKmRS9RoPqs8"
            alt="Acteur 2"
          />
          <div class="actor-details">
            <h4>Michelle Rodriguez</h4>
            <p>Letty</p>
          </div>
        </div>
        <div class="actor">
          <img
            class="actor-img"
            src="https://fastly.picsum.photos/id/827/200/300.jpg?hmac=0Q7y5JGXuxSXgO7VUvdNhXC4yoAupOJiKmRS9RoPqs8"
            alt="Acteur 3"
          />
          <div class="actor-details">
            <h4>Paul Walker</h4>
            <p>Brian </p>
          </div>
        </div>
        <div class="actor">
          <img
            class="actor-img"
            src="https://fastly.picsum.photos/id/827/200/300.jpg?hmac=0Q7y5JGXuxSXgO7VUvdNhXC4yoAupOJiKmRS9RoPqs8"
            alt="Acteur 4"
          />
          <div class="actor-details">
            <h4>Jordana Brewster</h4>
            <p>Mia</p>
          </div>
        </div>
        <div class="actor">
          <img
            class="actor-img"
            src="https://fastly.picsum.photos/id/827/200/300.jpg?hmac=0Q7y5JGXuxSXgO7VUvdNhXC4yoAupOJiKmRS9RoPqs8"
            alt="Acteur 5"
          />
          <div class="actor-details">
            <h4>Tyres Gibson</h4>
            <p>Roman</p>
          </div>
        </div>
        <div class="actor">
          <img
            class="actor-img"
            src="https://fastly.picsum.photos/id/827/200/300.jpg?hmac=0Q7y5JGXuxSXgO7VUvdNhXC4yoAupOJiKmRS9RoPqs8"
            alt="Acteur 6"
          />
          <div class="actor-details">
            <h4>Chad Lindberg</h4>
            <p>Jesse</p>
          </div>
        </div>
      
      </div>
    </section>
    

    <section class="spec-pictures">
      <h3>Photos</h3>
      <ul class="pic-list">
        <li>
          <img
            class="pics"
            src="img\films\fnf1.jpg"
            alt=""
          />
        </li>
        <li>
          <img
            class="pics"
            src="img\films\fnf2.jpg"
            alt=""
          />
        </li>
        <li>
          <img
            class="pics"
            src="img\films\fnf3.jpg"
            alt=""
          />
        </li>
        <li>
          <img
            class="pics"
            src="img\films\fnf4.jpg"
            alt=""
          />
        </li>
        <li>
          <img
            class="pics"
            src="img\films\fnf5.jpg"
            alt=""
          />
        </li>
      </ul>
    </section>

    <div id="modal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="modal-img">
    </div>

    <section class="user-reviews">
      <h3>Commentaires des utilisateurs</h3>
      <div class="all-reviews">
        <div class="reviews">
          <h4>De @PaulWalker4Ever</h4>
          <p>Topissime !</p>
        </div>
        <div class="reviews">
          <h4>De @grosnazedu79</h4>
          <p>Nul à ch***</p>
        </div>
        <div class="reviews">
          <h4>De @jaiplusdidée</h4>
          <p>Un long récit épique et captivant, un vrai réga-haha je déconne</p>
        </div>
        <div class="reviews">
          <h4>De @sendhelp59</h4>
          <p>J'ai perdu 1h47 de ma vie</p>
        </div>
      </div>
    </section>

    <script src="js/films.js"></script>
  </body>
</html>
