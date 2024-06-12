
<?php
// caroussel : nomPoster => video
 $caroussel = [
    "img-1.png" => "RickRolled.webm",
    "img-2.png" => "RickRolled.webm",
    "img-3.png" => "RickRolled.webm",
    "img-4.png" => "RickRolled.webm",
    "img-5.png" => "RickRolled.webm",
    "img-6.png" => "RickRolled.webm",
    "img-7.png" => "RickRolled.webm",
    "img-8.png" => "RickRolled.webm",
    "img-9.png" => "RickRolled.webm",
    "img-10.png" => "RickRolled.webm",
 ];

 $affiche =[
    "testAffiche.jpeg",
    "testAffiche2.jpeg",
    "testAffiche.jpeg",
    "testAffiche2.jpeg",
    "testAffiche.jpeg",
    "testAffiche2.jpeg",
    "testAffiche.jpeg",
    "testAffiche.jpeg",
    "testAffiche2.jpeg",
    "testAffiche2.jpeg",
    "testAffiche.jpeg",
    "testAffiche.jpeg",
    "testAffiche2.jpeg",
    "testAffiche.jpeg",
    "testAffiche2.jpeg"    
 ];

$fame = [
    "The Matrix" => [ "affiche/testAffiche.jpeg" => 8.7],
    "Star Wars: Épisode IV - Un nouvel espoir" => [ "affiche/testAffiche2.jpeg" => 8.6],
    "La Ligne Verte" => [ "affiche/testAffiche.jpeg" => 8.6],
    "Le Seigneur des anneaux : Les Deux Tours" => [ "affiche/testAffiche.jpeg" => 8.8],
    "Il faut sauver le soldat Ryan" => [ "affiche/testAffiche.jpeg" => 8.6],
];

$shame = [
    "Le fils du mask" => [ "affiche/testAffiche.jpeg" => 2.3],
    "House of the Dead" => [ "affiche/testAffiche2.jpeg" => 2.1],
    "Troll II" => [ "affiche/testAffiche.jpeg" => 3.0],
    "Winnie-the-Pooh: Blood and Honey" => [ "affiche/testAffiche.jpeg" => 2.9],
    "Mortal kombat: Destruction finale" => [ "affiche/testAffiche.jpeg" => 3.6],
];

 function prepareNotes($movies){
    $res=[];
    foreach($movies as $title => $poster){
        foreach($poster as $img => $note){
           array_push($res, "<div class=\"note\"><img src=\"img/".$img."\"><p>" . $note . "/10</p><h3>" . $title . "</h3></div>");
        }    
    }
    return $res;
 }
?>

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
    <?php include "_navbar.php" ?>
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
                <?php foreach($caroussel as $poster => $video): ?>
                    <video  muted controls class="image-item video-viewport" src="video/<?= $video ?>" controls type="video/mp4" poster="img/<?= $poster ?>"></video>
                 <?php endforeach; ?>

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
              <?php 
                $data =prepareNotes($fame);
                for($i =0; $i<count($data);$i++): ?>
                 <?= $data[$i] ?> 

                <?php endfor; ?>
          </div>
          <div class="shame">
              <h2>Tops navets</h2>
              <?php 
                $data =prepareNotes($shame);
                for($i =0; $i<count($data);$i++): ?>
                 <?= $data[$i] ?> 

                <?php endfor; ?>
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

                <?php for($i=0; $i<count($affiche);$i++): ?>
                    <img src="img/Affiche/<?= $affiche[$i] ?>" alt="poster <?= $i+1 ?>">
                <?php endfor; ?>

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

    <?php include '_footer.php' ?>

</body>
</html>