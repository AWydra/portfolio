<header id="intro" class="intro">
  <section class="intro__container">
    <img
      class="intro__photo"
      src="//<?= $_SERVER['SERVER_NAME'] ?>/img/photo_intro.jpg"
      alt=""
    />
    <h1 class="intro__name">
      Arkadiusz <span class="intro__surname">Wydra</span>
    </h1>
    <p class="intro__subtitle">
      Junior
      <span class="intro__subtitle intro__subtitle--bold"
        >Front-end Developer</span
      >
    </p>
  </section>
  <a href="#about" class="intro__arrow">
    <svg class="icon">
      <use
        xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-arrows"
      ></use>
    </svg>
  </a>
</header>
<main class="page">
  <section id="about" class="about page__section">
    <header class="title">
      <div class="title__holder">
        <h2 class="title__content">o mnie</h2>
        <p class="title__subtitle">
          Najważniejsze informacje o mojej osobie
        </p>
      </div>
    </header>
    <section class="about__container">
      <div class="about__image">
        <div class="about__image-container">
          <img
            class="about__image-file"
            src="//<?= $_SERVER['SERVER_NAME'] ?>/img/photo_about.jpg"
            alt="My person with crossed arms and checkered shirt"
          />
        </div>
      </div>
      <div class="about__content">
        <h3 class="about__title">Cześć</h3>
        <p class="about__subtitle">pozwól, że się przedstawię...</p>
        <p class="about__description">
          Nazywam się
          <span class="about__highlight">Arkadiusz Wydra</span> i jestem
          front-end developerem. Uczeń technikum informatycznego w Zielonej
          Górze. Zawsze szukam okazji do kodowania i uczenia się nowych rzeczy.
          Mam ponad 10 miesięcy komercyjnego doświadczenia w kodowaniu stron
          internetowych i aplikacji przy użyciu nowoczesnego HTML, CSS i
          JavaScript. W moich realizacjach stawiam przede wszystkim na wysoką
          jakość kodu i jak najprzyjemniejszą interakcję użytkownika ze stroną.
        </p>
        <hr class="about__line" />
        <ul class="about__info">
          <li class="about__info-item">
            <span class="about__info-key">wiek:</span>
            <p class="about__info-value">
              <?php
                echo floor((time() - strtotime("2000-08-16")) / 31556926);
              ?> 
              Lat</p>
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
        <h2 class="title__content">umiejętności</h2>
        <p class="title__subtitle">
          Zobacz z czym na co dzień pracuję
        </p>
      </div>
    </header>

    <!-- Front-end technologies -->
    <article class="skills__article">
      <h3 class="skills__heading">
        Front-end
      </h3>
      <div class="skills__container">
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-html5"
            ></use>
          </svg>
          <h4 class="skills__lang">HTML</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-css3"
            ></use>
          </svg>
          <h4 class="skills__lang">CSS</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-bootstrap"
            ></use>
          </svg>
          <h4 class="skills__lang">Bootstrap</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-sass"
            ></use>
          </svg>
          <h4 class="skills__lang">Sass</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-bem"
            ></use>
          </svg>
          <h4 class="skills__lang">BEM</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-js"
            ></use>
          </svg>
          <h4 class="skills__lang">JavaScript</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-jquery"
            ></use>
          </svg>
          <h4 class="skills__lang">JQuery</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-react"
            ></use>
          </svg>
          <h4 class="skills__lang">React</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-redux"
            ></use>
          </svg>
          <h4 class="skills__lang">Redux</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-mui"
            ></use>
          </svg>
          <h4 class="skills__lang">Material UI</h4>
        </div>
        <div class="skills__feature-box">
          💅
          <h4 class="skills__lang">styled-components</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-pwa"
            ></use>
          </svg>
          <h4 class="skills__lang">PWA</h4>
        </div>
      </div>
    </article>

    <!-- Back-end technologies -->
    <article class="skills__article">
      <h3 class="skills__heading">
        Back-end
      </h3>
      <div class="skills__container">
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-php"
            ></use>
          </svg>
          <h4 class="skills__lang">PHP</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-mysql"
            ></use>
          </svg>
          <h4 class="skills__lang">MySQL</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-nodejs"
            ></use>
          </svg>
          <h4 class="skills__lang">Node.js + Express</h4>
        </div>
      </div>
    </article>

    <!-- Tools -->
    <article class="skills__article">
      <h3 class="skills__heading">
        Narzędzia
      </h3>
      <div class="skills__container">
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-git"
            ></use>
          </svg>
          <h4 class="skills__lang">Git</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-npm"
            ></use>
          </svg>
          <h4 class="skills__lang">NPM</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-yarn"
            ></use>
          </svg>
          <h4 class="skills__lang">Yarn</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-gulp"
            ></use>
          </svg>
          <h4 class="skills__lang">gulp.js</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-babel"
            ></use>
          </svg>
          <h4 class="skills__lang">Babel</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-adobeps"
            ></use>
          </svg>
          <h4 class="skills__lang">Photoshop</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-adobeai"
            ></use>
          </svg>
          <h4 class="skills__lang">Illustrator</h4>
        </div>
        <div class="skills__feature-box">
          <svg class="icon icon--skills">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-coreldraw"
            ></use>
          </svg>
          <h4 class="skills__lang">Corel Draw</h4>
        </div>
      </div>
    </article>
    <!-- <div class="skills__feature-box">
        <svg class="icon icon--skills">
          <use
            xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-graphql"
          ></use>
        </svg>
        <h3 class="skills__lang">GraphQL</h3>
      </div> 
    <div class="skills__feature-box">
      <svg class="icon icon--skills">
        <use xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-mongodb"></use>
      </svg>
      <h4 class="skills__lang">MongoDB</h4>
    </div>
    -->
  </section>
  <section id="portfolio" class="portfolio page__section">
    <header class="title">
      <div class="title__holder">
        <h2 class="title__content">portfolio</h2>
        <p class="title__subtitle">
          Sprawdź moje ostatnie projekty
        </p>
      </div>
    </header>
    <section class="portfolio__container">
      <article class="portfolio__feature-box">
        <a class="portfolio__link" href="#">
          <figure class="portfolio__figure">
            <div class="portfolio__img-container">
              <img
                class="portfolio__img"
                src="https://dummyimage.com/400x230/9e9e9e/fff"
                alt="Project 1"
              />
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
              <img
                class="portfolio__img"
                src="https://dummyimage.com/400x230/9e9e9e/fff"
                alt="Project 1"
              />
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
              <img
                class="portfolio__img"
                src="https://dummyimage.com/400x230/9e9e9e/fff"
                alt="Project 1"
              />
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
              <img
                class="portfolio__img"
                src="https://dummyimage.com/400x230/9e9e9e/fff"
                alt="Project 1"
              />
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
              <img
                class="portfolio__img"
                src="https://dummyimage.com/400x230/9e9e9e/fff"
                alt="Project 1"
              />
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
              <use
                xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-quote"
              ></use>
            </svg>
          </div>
          <p class="testimonials__content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
            debitis repellendus repellat obcaecati cupiditate earum alias ab
            laboriosam, voluptas ratione ipsa saepe deserunt maxime accusamus
            facere eligendi, odit veritatis impedit.
          </p>
          <p class="testimonials__name-holder">John Doe, CEO Founder</p>
        </article>
        <article class="testimonials__item">
          <div class="testimonials__quote">
            <svg class="icon icon--theme icon--testimonials">
              <use
                xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-quote"
              ></use>
            </svg>
          </div>
          <p class="testimonials__content">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Repudiandae dolor quidem perferendis eveniet nulla atque, harum
            blanditiis laboriosam, ipsam ea qui cupiditate
          </p>
          <p class="testimonials__name-holder">John Doe, CEO Founder</p>
        </article>
      </div>
      <ul class="controls testimonials__controls" id="customize-controls">
        <li class="prev testimonials__prev">
          <svg class="icon icon--theme icon--testimonials">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-arrow-left"
            ></use>
          </svg>
        </li>
        <li class="next testimonials__next">
          <svg class="icon icon--theme icon--testimonials">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-arrow-right"
            ></use>
          </svg>
        </li>
      </ul>
      <div id="customize-thumbnails"></div>
    </div>
  </section>
  <section id="contact" class="contact page__section">
    <header class="title">
      <div class="title__holder">
        <h2 class="title__content">kontakt</h2>
        <p class="title__subtitle">
          Masz pytanie? Napisz do mnie
        </p>
      </div>
    </header>
    <section class="contact__container">
      <div class="contact__info">
        <article class="contact__info-item">
          <svg class="icon icon--theme icon--contact">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-cell-phone"
            ></use>
          </svg>
          <h6 class="contact__info-heading">Telefon</h6>
          <a
            href="#"
            class="contact__info-anchor"
            data-keep-safe="062 063 566 84+"
          ></a>
          <a
            href="#"
            class="contact__info-anchor"
            data-keep-safe="ARDYW 9375 84+"
          ></a>
        </article>
        <article class="contact__info-item">
          <svg class="icon icon--theme icon--contact">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-at"
            ></use>
          </svg>
          <h6 class="contact__info-heading">Email</h6>
          <a
            href="#"
            class="contact__info-anchor"
            data-keep-safe="lp.ardywa@olleh"
          >
          </a>
        </article>
        <article class="contact__info-item">
          <svg class="icon icon--theme icon--contact icon--users">
            <use
              xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#icon-users"
            ></use>
          </svg>
          <h6 class="contact__info-heading">Social media</h6>
          <a
            href="//linkedin.com/in/AWydra"
            class="contact__info-anchor"
            target="_blank"
            >LinkedIn</a
          >
          <a
            href="//github.com/AWydra"
            class="contact__info-anchor"
            target="_blank"
            >GitHub</a
          >
          <a
            href="//m.me/wydramord"
            class="contact__info-anchor"
            target="_blank"
            >Messenger</a
          >
        </article>
      </div>
      <article class="contact__form-container">
        <h4 class="contact__heading">Przywitaj się :)</h4>
        <form action="mail.php" class="contact__form">
          <div class="contact__inputs">
            <div class="contact__input-container">
              <input
                class="contact__input"
                type="text"
                name="name"
                placeholder="Imię"
              />
              <div class="contact__underscore"></div>
            </div>
            <div class="contact__input-container">
              <input
                class="contact__input"
                type="email"
                name="email"
                placeholder="Email"
              />
              <div class="contact__underscore"></div>
            </div>
          </div>
          <div class="contact__textarea-container">
            <textarea
              class="contact__textarea"
              name="message"
              placeholder="Treść wiadomości"
            ></textarea>
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
