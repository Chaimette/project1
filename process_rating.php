<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $rating = htmlentities($_POST ['rating']);
        // TO CHECK IF NUMBER VALID
    if (is_numeric($rating) && $rating >= 0 && $rating <=10) {
        //TO OPEN FILE
        $file = fopen("ratings.txt", "a");

      if ($file) {
        //TO WRITE IN FILE
        fwrite($file, "$rating/10\n");
        //TO CLOSE FILE
        fclose($file);
      } else {
        echo "Impossible d'ouvrir le fichier.";
      }
      header('Location: page-films.php');
    } else {
      echo "Veuillez entrer une note valide entre 0 et 10.";
    }
}