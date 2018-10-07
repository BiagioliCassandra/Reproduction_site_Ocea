<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Header Testocea</title>
  <meta name="description" content="Header">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
<!--~~~~~~~~~~~~~~~~~~~~~
      Start header
~~~~~~~~~~~~~~~~~~~~~~-->
  <header>
    <nav>
      <ul class="flex puce">
        <li><a class="a color_black" href="http://www.oceaclub.com/"><img src="http://www.oceaclub.com/imgs/ocea.png" alt="Le logo du club ocea" width="50"></a></li>
        <li><a class="a color_black" href="#oceasport">SPORT</a></li>
        <li><a class="a color_black" href="#oceaesth">ESTHETIQUE</a></li>
        <li><a class="a color_black" href="#oceasun">CENTRE U.V.</a></li>
        <li><a class="a color_black" href="http://www.oceaclub.com/contact.php">NOUS CONTACTER</a></li>
      </ul>
    </nav>
    <div id="slideshow">
      <img class="slideshow_image" src="http://www.oceaclub.com/slides/bodypump.jpg" alt="Une image de gens qui souffre en soulevant des poids" height="500">
      <img class="slideshow_image" src="http://www.oceaclub.com/slides/bodybalance.jpg" alt="Une image de gens qui ont l'air de souffrir en faisant du vélo" height="500">
      <img class="slideshow_image" src="http://www.oceaclub.com/slides/rpm.jpg" alt="Une image de gens qui ont l'air de s'amuser en faisant du fitness" height="500">
      <img class="slideshow_image" src="http://www.oceaclub.com/slides/shbam.jpg" alt="Une image de gens qui ont l'air de s'amuser en faisant de la danse" height="500">
      
      <script>
        var slideIndex = 0;
        showSlides();
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("slideshow_image");
          for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none"; 
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1} 
          slides[slideIndex-1].style.display = "block"; 
          setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
      </script>
      <div>
        <p>« Nous sommes Ocea. Nous représentons fièrement la pratique du fitness sur Lille et ses alentours.<br>Le sport est notre métier mais c'est avant tout notre passion. Nous sommes un grand club - mais à taille humaine - où chacun des membres de notre grande famille se met au service de notre lutte contre la sédentarité.<br>
        Vous satisfaire est notre priorité de tous les jours. Nous ne vous proposons pas de cours sur écran mais plus de 100 cours collectifs par semaine encadrés par des éducateurs sportifs diplômés.<br>
        Nous connaissons les prénoms de nos adhérents. Nous sommes des passionnés. Nous sommes Ocea. »</p>
        <p>Bienvenue !</p>
      </div>
    </div>
  </header>
<!--~~~~~~~~~~~~~~~~~~~~~
      End header
~~~~~~~~~~~~~~~~~~~~~~-->

  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
