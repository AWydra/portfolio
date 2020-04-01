<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="//<?= $_SERVER["SERVER_NAME"] ?>/css/style.css" />
  <link rel="stylesheet" href="//<?= $_SERVER["SERVER_NAME"] ?>/css/<?= $file ?>.css" />
  <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600|Nunito&display=swap" rel="stylesheet" />
  <title>Arkadiusz Wydra | Junior Front-end Developer</title>
</head>

<body>
  <div id="wrapper">
    <aside class="navigation">
      <section class="navigation__logo">
        <a href="//<?= $_SERVER["SERVER_NAME"] ?>" class="navigation__logo-href">
          <svg class="navigation__logo-image">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/logo.svg#site-logo"></use>
          </svg>
          <p class=" navigation__logo-desc">Arkadiusz Wydra</p>
        </a>
      </section>
      <button id="hamburger" class="navigation__hamburger">
        <div class="navigation__hamburger-inner"></div>
      </button>
      <section id="nav" class="navigation__container">
        <nav class="navigation__nav">
          <ul class="navigation__list">
            <li class="navigation__item">
              <a href="//<?= $_SERVER["SERVER_NAME"] ?>/#intro" class="navigation__link">start</a>
            </li>
            <li class="navigation__item">
              <a href="//<?= $_SERVER["SERVER_NAME"] ?>/#about" class="navigation__link">o mnie</a>
            </li>
            <li class="navigation__item">
              <a href="//<?= $_SERVER["SERVER_NAME"] ?>/#skills" class="navigation__link">umiejętności</a>
            </li>
            <li class="navigation__item">
              <a href="//<?= $_SERVER["SERVER_NAME"] ?>/#portfolio" class="navigation__link">portfolio</a>
            </li>
            <li class="navigation__item">
              <a href="//<?= $_SERVER["SERVER_NAME"] ?>/#testimonials" class="navigation__link">referencje</a>
            </li>
            <li class="navigation__item">
              <a href="//<?= $_SERVER["SERVER_NAME"] ?>/#contact" class="navigation__link">kontakt</a>
            </li>
          </ul>
        </nav>
        <article class="navigation-icon">
          <ul class="navigation-icon__list">
            <li class="navigation-icon__item">
              <a href="//fb.me/wydramord" class="navigation-icon__link">
                <svg class="icon">
                  <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-facebook"></use>
                </svg>
              </a>
            </li>
            <li class="navigation-icon__item">
              <a href="//linkedin.com/in/awydra" class="navigation-icon__link">
                <svg class="icon">
                  <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-linkedin"></use>
                </svg>
              </a>
            </li>
            <li class="navigation-icon__item">
              <a href="//github.com/AWydra" class="navigation-icon__link">
                <svg class="icon">
                  <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-github"></use>
                </svg>
              </a>
            </li>
          </ul>
        </article>
      </section>
    </aside>
    <div class="container">
      <?php include($page) ?>
      <footer class="copyrights">
        Copyright &copy; <?= date("Y") ?> Arkadiusz Wydra
      </footer>
    </div>
  </div>

  <script src="//<?= $_SERVER["SERVER_NAME"] ?>/js/global.js"></script>
  <script src="//<?= $_SERVER["SERVER_NAME"] ?>/js/<?= $file ?>.js"></script>
</body>

</html>