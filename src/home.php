<header id="intro" class="intro">
  <section class="intro__container">
    <img class="intro__photo" src="//<?= $_SERVER["SERVER_NAME"] ?>/img/photo_intro.jpg" alt="" />
    <h1 class="intro__name">
      Arkadiusz <span class="intro__surname">Wydra</span>
    </h1>
    <p class="intro__subtitle">
      Junior <span class="intro--bold">Front-end Developer</span>
    </p>
  </section>
  <button class="intro__arrow">
    <svg class="icon">
      <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-arrows"></use>
    </svg>
  </button>
</header>
<main class="page">
  <section id="about" class="about page__section">
    <header class="title">
      <div class="title__holder">
        <h2 class="title__holder--heading">o mnie</h2>
        <p class="title__holder--subtitle">
          Najważniejsze informacje o mojej osobie
        </p>
      </div>
    </header>
    <section class="about__container">
      <div class="about__image">
        <div class="about__image-container">
          <img class="about__image-file" src="//<?= $_SERVER["SERVER_NAME"] ?>/img/photo_about.jpg"
            alt="My person with crossed arms and checkered shirt" />
        </div>
      </div>
      <div class="about__content">
        <h3 class="about__title">Cześć</h3>
        <p class="about__subtitle">pozwól, że się przedstawię...</p>
        <p class="about__description">
          Nazywam się
          <span class="about__highlight">Arkadiusz Wydra</span> i jestem
          front-end developerem. Uczeń technikum informatycznego w
          Zielonej Górze. Zawsze szukam okazji do kodowania i uczenia
          się nowych rzeczy. Mam ponad 10 miesięcy komercyjnego
          doświadczenia w kodowaniu stron internetowych i aplikacji przy
          użyciu nowoczesnego HTML, CSS i JavaScript. W moich
          realizacjach stawiam przede wszystkim na wysoką jakość kodu i
          jak najprzyjemniejszą interakcję użytkownika ze stroną.
        </p>
        <hr class="about__line" />
        <ul class="about__info">
          <li class="about__info-item">
            <span class="about__info-key">wiek:</span>
            <p class="about__info-value">18 Lat</p>
          </li>
          <li class="about__info-item">
            <span class="about__info-key">miasto:</span>
            <p class="about__info-value">Zielona Góra</p>
          </li>
        </ul>
        <a href="cv.pdf" class="btn btn--theme" download>pobierz cv</a>
      </div>
    </section>
  </section>
  <section id="skills" class="skills page__section">
    <header class="title">
      <div class="title__holder">
        <h2 class="title__holder--heading">umiejętności</h2>
        <p class="title__holder--subtitle">
          Zobacz z czym na co dzień pracuję
        </p>
      </div>
    </header>
    <section class="skills__container">
      <article class="skills__feature-box">
        <div class="skills__icon-container">
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-html5"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-css3"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-js"></use>
          </svg>
        </div>
        <h3 class="skills__heading">HTML | CSS | JavaScript</h3>
        <hr class="skills__underscore" />
        <p class="skills__description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatem explicabo quod alias repellendus tempora dolore
          inventore sit commodi cupiditate qui
        </p>
      </article>
      <article class="skills__feature-box">
        <div class="skills__icon-container">
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-bootstrap"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-sass"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-bem"></use>
          </svg>
        </div>
        <h3 class="skills__heading">Bootstrap | Sass | BEM</h3>
        <hr class="skills__underscore" />
        <p class="skills__description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatem explicabo quod alias repellendus tempora dolore
          inventore sit commodi cupiditate qui
        </p>
      </article>
      <article class="skills__feature-box">
        <div class="skills__icon-container">
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-jquery"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-react"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-redux"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-firebase"></use>
          </svg>
        </div>
        <h3 class="skills__heading">JQuery | React | Redux</h3>
        <hr class="skills__underscore" />
        <p class="skills__description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatem explicabo quod alias repellendus tempora dolore
          inventore sit commodi cupiditate qui
        </p>
      </article>
      <article class="skills__feature-box">
        <div class="skills__icon-container">
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-git"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-npm"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-gulp"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-babel"></use>
          </svg>
        </div>
        <h3 class="skills__heading">Git | npm | Gulp | Babel</h3>
        <hr class="skills__underscore" />
        <p class="skills__description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatem explicabo quod alias repellendus tempora dolore
          inventore sit commodi cupiditate qui
        </p>
      </article>
      <article class="skills__feature-box">
        <div class="skills__icon-container">
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-adobeps"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-adobeai"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-coreldraw"></use>
          </svg>
        </div>
        <h3 class="skills__heading">Programy graficzne</h3>
        <hr class="skills__underscore" />
        <p class="skills__description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatem explicabo quod alias repellendus tempora dolore
          inventore sit commodi cupiditate qui
        </p>
      </article>
      <article class="skills__feature-box">
        <div class="skills__icon-container">
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-angular"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-graphql"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-nodejs"></use>
          </svg>
          <svg class="icon icon--skills">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-mongodb"></use>
          </svg>
        </div>
        <h3 class="skills__heading">Mam zamiar nauczyć się</h3>
        <hr class="skills__underscore" />
        <p class="skills__description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatem explicabo quod alias repellendus tempora dolore
          inventore sit commodi cupiditate qui
        </p>
      </article>
    </section>
  </section>
  <section id="portfolio" class="portfolio page__section">
    <header class="title">
      <div class="title__holder">
        <h2 class="title__holder--heading">portfolio</h2>
        <p class="title__holder--subtitle">
          Sprawdź moje ostatnie projekty
        </p>
      </div>
    </header>
    <section class="portfolio__container">
      <article class="portfolio__feature-box">
        <a class="portfolio__link" href="#">
          <figure class="portfolio__figure">
            <div class="portfolio__img-container">
              <img class="portfolio__img" src="https://dummyimage.com/400x230/9e9e9e/fff" alt="Project 1" />
            </div>
            <figcaption class="portfolio__figcap">
              <h2 class="portfolio__title">Lorem ipsum</h2>
              <hr class="portfolio__underscore" />
            </figcaption>
          </figure>
        </a>
      </article>
      <article class="portfolio__feature-box">
        <a class="portfolio__link" href="#">
          <figure class="portfolio__figure">
            <div class="portfolio__img-container">
              <img class="portfolio__img" src="https://dummyimage.com/400x230/9e9e9e/fff" alt="Project 1" />
            </div>
            <figcaption class="portfolio__figcap">
              <h2 class="portfolio__title">Lorem ipsum</h2>
              <hr class="portfolio__underscore" />
            </figcaption>
          </figure>
        </a>
      </article>
      <article class="portfolio__feature-box">
        <a class="portfolio__link" href="#">
          <figure class="portfolio__figure">
            <div class="portfolio__img-container">
              <img class="portfolio__img" src="https://dummyimage.com/400x230/9e9e9e/fff" alt="Project 1" />
            </div>
            <figcaption class="portfolio__figcap">
              <h2 class="portfolio__title">Lorem ipsum</h2>
              <hr class="portfolio__underscore" />
            </figcaption>
          </figure>
        </a>
      </article>
      <article class="portfolio__feature-box">
        <a class="portfolio__link" href="#">
          <figure class="portfolio__figure">
            <div class="portfolio__img-container">
              <img class="portfolio__img" src="https://dummyimage.com/400x230/9e9e9e/fff" alt="Project 1" />
            </div>
            <figcaption class="portfolio__figcap">
              <h2 class="portfolio__title">Lorem ipsum</h2>
              <hr class="portfolio__underscore" />
            </figcaption>
          </figure>
        </a>
      </article>
      <article class="portfolio__feature-box">
        <a class="portfolio__link" href="#">
          <figure class="portfolio__figure">
            <div class="portfolio__img-container">
              <img class="portfolio__img" src="https://dummyimage.com/400x230/9e9e9e/fff" alt="Project 1" />
            </div>
            <figcaption class="portfolio__figcap">
              <h2 class="portfolio__title">Lorem ipsum</h2>
              <hr class="portfolio__underscore" />
            </figcaption>
          </figure>
        </a>
      </article>
    </section>
  </section>
  <section id="testimonials" class="testimonials page__section">
    <div class="testimonials__container">
      <div class="testimonials__slider">
        <article class="testimonials__item">
          <div class="testimonials__quote">
            <svg class="icon icon--theme icon--testimonials">
              <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-quote"></use>
            </svg>
          </div>
          <p class="testimonials__content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Dolore debitis repellendus repellat obcaecati cupiditate
            earum alias ab laboriosam, voluptas ratione ipsa saepe
            deserunt maxime accusamus facere eligendi, odit veritatis
            impedit.</p>
          <p class="testimonials__name-holder">John Doe, CEO Founder</p>
        </article>
        <article class="testimonials__item">
          <div class="testimonials__quote">
            <svg class="icon icon--theme icon--testimonials">
              <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-quote"></use>
            </svg>
          </div>
          <p class="testimonials__content">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Repudiandae dolor quidem perferendis eveniet nulla atque,
            harum blanditiis laboriosam, ipsam ea qui cupiditate</p>
          <p class="testimonials__name-holder">John Doe, CEO Founder</p>
        </article>
      </div>
      <ul class="controls testimonials__controls" id="customize-controls">
        <li class="prev testimonials__prev">
          <svg class="icon icon--theme icon--testimonials">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-arrow-left"></use>
          </svg>
        </li>
        <li class="next testimonials__next">
          <svg class="icon icon--theme icon--testimonials">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-arrow-right"></use>
          </svg>
        </li>
      </ul>
      <div id="customize-thumbnails"></div>
    </div>
  </section>
  <section id="contact" class="contact page__section">
    <header class="title">
      <div class="title__holder">
        <h2 class="title__holder--heading">kontakt</h2>
        <p class="title__holder--subtitle">
          Masz pytanie? Napisz do mnie
        </p>
      </div>
    </header>
    <section class="contact__container">
      <div class="contact__info">
        <article class="contact__info-item">
          <svg class="icon icon--theme icon--contact">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-cell-phone"></use>
          </svg>
          <h6 class="contact__info-heading">Telefon</h6>
          <a href="#" class="contact__info-anchor">+48 xxx xxx xxx</a>
          <a href="" class="contact__info-anchor">+48 xxx xxx xxx</a>
        </article>
        <article class="contact__info-item">
          <svg class="icon icon--theme icon--contact">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-at"></use>
          </svg>
          <h6 class="contact__info-heading">Email</h6>
          <a href="mailto:hello@awydra.pl" class="contact__info-anchor">
            hello@axxxxa.pl
          </a>
        </article>
        <article class="contact__info-item">
          <svg class="icon icon--theme icon--contact icon--users">
            <use xlink:href="//<?= $_SERVER["SERVER_NAME"] ?>/img/svg/icons.svg#icon-users"></use>
          </svg>
          <h6 class="contact__info-heading">Social media</h6>
          <a href="//linkedin.com/in/AWydra" class="contact__info-anchor" target="_blank">LinkedIn</a>
          <a href="//github.com/AWydra" class="contact__info-anchor" target="_blank">GitHub</a>
          <a href="//m.me/wydramord" class="contact__info-anchor" target="_blank">Messenger</a>
        </article>
      </div>
      <article class="contact__form-container">
        <h4 class="contact__heading">Przywitaj się :)</h4>
        <form action="mail.php" class="contact__form">
          <div class="contact__input-container">
            <input class="contact__input" type="text" name="name" placeholder="Imię" />
            <div class="contact__underscore"></div>
          </div>
          <div class="contact__input-container">
            <input class="contact__input" type="email" name="email" placeholder="Email" />
            <div class="contact__underscore"></div>
          </div>
          <div class="contact__textarea-container">
            <textarea class="contact__textarea" name="message" placeholder="Treść wiadomości"></textarea>
            <div class="contact__underscore"></div>
          </div>
          <button class="btn btn--theme btn--medium" type="submit" name="send">
            Wyślij wiadomość
          </button>
        </form>
      </article>
    </section>
  </section>
</main>