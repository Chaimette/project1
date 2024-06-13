<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlentities($_POST['userName']);
    $review = htmlentities($_POST['yourReview']);
    
    $file = fopen("reviews.txt", "a");
    fwrite($file, "$username: $review\n");
    fclose($file);
    
    header('Location: page-films.php');
}


