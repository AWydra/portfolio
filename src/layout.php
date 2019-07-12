<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="//<?= $_SERVER["SERVER_NAME"] ?>/css/style.css" />
  <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600|Nunito&display=swap" rel="stylesheet" />
  <title>Arkadiusz Wydra | Junior Front-end Developer</title>
</head>

<body>
  <div id="wrapper">
    <aside class="navigation">
      <section class="navigation__logo">
        <img class="navigation__logo-image" src="//<?= $_SERVER["SERVER_NAME"] ?>/img/logo.png" alt="My logo" />
        <p class="navigation__logo-desc">Arkadiusz Wydra</p>
      </section>
      <section class="navigation__container">
        <nav class="navigation__nav">
          <ul class="navigation__list">
            <li class="navigation__item">
              <a href="#" class="navigation__link">start</a>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link">o mnie</a>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link">umiejętności</a>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link">portfolio</a>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link">referencje</a>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link">kontakt</a>
            </li>
          </ul>
        </nav>
        <article class="navigation-icon">
          <ul class="navigation-icon__list">
            <li class="navigation-icon__item">
              <a href="//fb.me/wydramord" class="navigation-icon__link">
                <svg class="icon">
                  <use xlink:href="img/svg/icons.svg#icon-facebook"></use>
                </svg>
              </a>
            </li>
            <li class="navigation-icon__item">
              <a href="//linkedin.com/in/awydra" class="navigation-icon__link">
                <svg class="icon">
                  <use xlink:href="img/svg/icons.svg#icon-linkedin"></use>
                </svg>
              </a>
            </li>
            <li class="navigation-icon__item">
              <a href="//github.com/AWydra" class="navigation-icon__link">
                <svg class="icon">
                  <use xlink:href="img/svg/icons.svg#icon-github"></use>
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
        Copyright &copy; 2019 Arkadiusz Wydra
      </footer>
    </div>
  </div>

  <script src="//<?= $_SERVER["SERVER_NAME"] ?>/js/main.js"></script>
</body>

</html>