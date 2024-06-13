<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"/>
    <title>Document</title>    
    <script type="text/javascript" src="js/carousel.js"></script>
  </head>
<body>
    <header>
        <section>
            <nav>
                <img src="img/Logo.jpg" class="Logo" alt="Logo du site"/>
                <input type="checkbox" class ="toggle-btn">
                <div class="burger-menu"></div>
                <div class="menu-wrapper">
                    <div class="toggle-menu">                    
                        <h2>Menu</h2>
                        <menu>
                            <li><a href="articles.html">Articles</a></li>
                            <li><a href="">Actualités</a></li>
                            <li><a href="page-films.html">Films</a></li>
                        </menu>
                    </div>
                    <form action="" class="searchBar">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <h3>
                        <a href="">Se Connecter</a>
                    </h3>
                </div>
            </nav>        
        </section>    
    </header>
    <main>
        <section class="carousel">
            <div class="slider-wrapper">
                <button class="slide-button" id="left">
                    <svg class="prev">
                        <use href="icons/sprite.svg#prev"/>
                    </svg>
                </button>
                <div class="item-list">
                  <video  muted controls class="image-item video-viewport" src="video/RickRolled.webm" controls type="video/mp4" poster="img/img-4.png"></video>
                  <video  muted controls class="image-item video-viewport" src="video/RickRolled.webm" controls type="video/mp4" poster="img/img-2.png"></video>
                  <video  muted controls class="image-item video-viewport" src="video/RickRolled.webm" controls type="video/mp4" poster="img/img-3.png"></video>
                  <video  muted controls class="image-item video-viewport" src="video/RickRolled.webm" controls type="video/mp4" poster="img/img-4.png"></video>
                  <video  muted controls class="image-item video-viewport" src="video/RickRolled.webm" controls type="video/mp4" poster="img/img-2.png"></video>
                  <video  muted controls class="image-item video-viewport" src="video/RickRolled.webm" controls type="video/mp4" poster="img/img-3.png"></video>
                  <video  muted controls class="image-item video-viewport" src="video/RickRolled.webm" controls type="video/mp4" poster="img/img-4.png"></video>               
                </div>
                <button class="slide-button" id="right">
                    <svg class="next">
                        <use xlink:href="icons/sprite.svg#next"/>
                    </svg>
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb">
                    </div>
                </div>
            </div>
        </section>
        <section id="news">
            <h2>Les dernières news</h2> 
          <div class="sheets">
              <div class="sheet-template">
                  <h3>Sheet template 1</h3>
                  <img src="" alt="dernières news">
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed risus ultrices magna ultrices sollicitudin. Donec tempor pretium libero eu maximus. Praesent rhoncus gravida odio, ut pharetra augue luctus at. Mauris dignissim felis ipsum, in ultrices nunc dictum quis. Curabitur placerat sapien at lectus lacinia, sed consectetur turpis pellentesque. Maecenas mollis sem non turpis vulputate molestie nec a urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ornare mi ac lacus accumsan scelerisque. 
                      Mauris consectetur dui ante, vitae semper tellus ullamcorper a. Integer posuere varius elit, eu posuere justo sagittis aliquam. Sed at tellus gravida, interdum dolor id, interdum odio. 
                  </p>    
              </div>
              <div class="sheet-template">
                  <h3>Sheet template 2</h3>
                  <img src="" alt="dernières news">
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed risus ultrices magna ultrices sollicitudin. Donec tempor pretium libero eu maximus. Praesent rhoncus gravida odio, ut pharetra augue luctus at. Mauris dignissim felis ipsum, in ultrices nunc dictum quis. Curabitur placerat sapien at lectus lacinia, sed consectetur turpis pellentesque. Maecenas mollis sem non turpis vulputate molestie nec a urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ornare mi ac lacus accumsan scelerisque. 
                      Mauris consectetur dui ante, vitae semper tellus ullamcorper a. Integer posuere varius elit, eu posuere justo sagittis aliquam. Sed at tellus gravida, interdum dolor id, interdum odio. 
                  </p>    
              </div>
              <div class="sheet-template">
                  <h3>Sheet template 3</h3>
                  <img src="" alt="dernières news">
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed risus ultrices magna ultrices sollicitudin. Donec tempor pretium libero eu maximus. Praesent rhoncus gravida odio, ut pharetra augue luctus at. Mauris dignissim felis ipsum, in ultrices nunc dictum quis. Curabitur placerat sapien at lectus lacinia, sed consectetur turpis pellentesque. Maecenas mollis sem non turpis vulputate molestie nec a urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ornare mi ac lacus accumsan scelerisque. 
                      Mauris consectetur dui ante, vitae semper tellus ullamcorper a. Integer posuere varius elit, eu posuere justo sagittis aliquam. Sed at tellus gravida, interdum dolor id, interdum odio. 
                  </p>    
              </div>
          </div>
        </section>
      
        <section id="hall">
          <div class="fame">
              <h2>Hall of Fame</h2>
              <div class="note"><p> /10 </p><h3>TITRE DU FILM</h3></div>
              <div class="note"><p> /10 </p><h3>TITRE DU FILM</h3></div>
              <div class="note"><p> /10 </p><h3>TITRE DU FILM</h3></div>
          </div>
          <div class="shame">
              <h2>Tops navets</h2>
              <div class="note"><p> /10 </p><h3>TITRE DU FILM</h3></div>
              <div class="note"><p> /10 </p><h3>TITRE DU FILM</h3></div>
              <div class="note"><p> /10 </p><h3>TITRE DU FILM</h3></div>
          </div>
        </section>
        <section id="poster" class="carousel">
          <div class="slider-wrapper">
              <button class="slide-button" id="left">
                  <svg class="prev">
                      <use href="icons/sprite.svg#prev"/>
                  </svg>
              </button>
              <div class="item-list">
                  <img src="img/testAffiche.jpeg" alt="poster 1">
                  <img src="img/testAffiche2.jpeg" alt="poster 2">
                  <img src="img/testAffiche.jpeg" alt="poster 3">
                  <img src="img/testAffiche2.jpeg" alt="poster 4">
                  <img src="img/testAffiche.jpeg" alt="poster 5">
                  <img src="img/testAffiche2.jpeg" alt="poster 6">
                  <img src="img/testAffiche.jpeg" alt="poster 7">
                  <img src="img/testAffiche2.jpeg" alt="poster 8">
              </div>
              <button class="slide-button" id="right">
                  <svg class="next">
                      <use xlink:href="icons/sprite.svg#next"/>
                  </svg>
              </button>
          </div>
          <div class="slider-scrollbar">
              <div class="scrollbar-track">
                  <div class="scrollbar-thumb">
                  </div>
              </div>
          </div>
      </section>      
    </main>
</body>
</html>