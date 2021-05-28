<?php

session_start();

if(empty($_SESSION['count'])){
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}

?>

<p>Vous avez vu cette page <?= $_SESSION['count'] ?> fois </p>