<?php

$url = $_SERVER['PHP_SELF'];
$explode_url = explode('/',$url);
$cPage = end($explode_url);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Blogist</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"/>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.13.0/css/pro.min.css"/>
    <link rel="shortcut icon" type="image/png" href="./assets/images/fav.png"/>
    <!--build:css assets/css/styles.min.css-->
    <link rel="stylesheet" href="assets/css/elegant.css"/>
    <link rel="stylesheet" href="assets/css/custom_bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/slick.css"/>
    <link rel="stylesheet" href="assets/css/plyr.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <!--endbuild-->
  </head>
  <body>
    <div id="load">
      <div class="load__content">
        <div class="load__icon"><img src="assets/images/icons/load.gif" alt="Loading icon"/></div>
      </div>
    </div>
    <header class="theme-default">
      <div id="search-box">
        <div class="container">
          <form action="/" method="POST">
            <input type="text" placeholder="Searching for news" name="search"/>
            <button><i class="fas fa-arrow-right"></i></button>
          </form>
        </div>
      </div>
      <div class="container">
      <?php
          $logoTb = mysqli_query($dbCon, "SELECT * FROM `logo` WHERE status=1");
          $logoAssoc = mysqli_fetch_assoc($logoTb);
      ?>
        <div class="header-wrapper">
          <a class="header__logo" href="index.php">
            <img src="/blogist/dashboard/uploads/settings/<?=$logoAssoc['logo']?>" alt="<?=$logoAssoc['logo']?>"/>
          </a>
          <nav>
            <ul>
              <li class="nav-item <?= ($cPage == 'index.php'? 'active': '')?>"><a href="index.php">Home</a></li>
              <li class="nav-item <?= ($cPage == 'blog.php'? 'active': '')?>"><a href="blog.php">Blog</a></li>
              <li class="nav-item <?= ($cPage == 'author.php'? 'active': '')?>"><a href="author.php">AUTHOR</a></li>
              <li class="nav-item <?= ($cPage == 'about.php'? 'active': '')?>"><a href="about.php">About</a></li>
              <li class="nav-item <?= ($cPage == 'contact.php'? 'active': '')?>"><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
          <div class="header__icon-group"><a href="#" id="search"><i class="fas fa-search"></i></a>
            <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-dribbble"></i></a><a id="mobile-menu-controller" href="#"><i class="fas fa-bars"></i></a></div>
          </div>
        </div>
      </div>
    </header>