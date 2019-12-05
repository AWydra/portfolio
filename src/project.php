<main class="page">
  <section id="project" class="project page__section">
    <header class="title">
      <div class="title__holder">
        <h2 class="title__content"><?= $heading ?></h2>
      </div>
    </header>
    <div class="project__wrap">
      <section class="project__column project__column--desc">
        <article class="description">
          <header class="title title--project">
            <div class="title__holder">
              <h3 class="title__content">Opis</h3>
            </div>
          </header>
          <p class="description__content">
            <?= $desc ?>
          </p>
        </article>
        <article class="gallery">
          <?= var_dump($images) ?>
        </article>
      </section>
      <section class="project__column project__column--details">
        <div class="project__sticky">
          <article class="details">
            <header class="title title--project">
              <div class="title__holder">
                <h3 class="title__content">Szczegóły</h3>
              </div>
            </header>
            <ul class="details__list">
              <?php foreach($details as $detail): ?>
              <li class="details__item">
                <svg class="icon icon--project">
                  <use xlink:href="//<?= $_SERVER['SERVER_NAME'] ?>/img/svg/icons.svg#<?= $detail['icon'] ?>"></use>
                </svg>
                <?= $detail['content'] ?>
              </li>
              <?php endforeach ?>
            </ul>
          </article>
          <article class="technologies">
            <header class="title title--project">
              <div class="title__holder">
                <h3 class="title__content">Technologie</h3>
              </div>
            </header>
            <ul class="technologies__list">
              <?php foreach($technologies as $technology): ?>
              <li class="technologies__item"><?= $technology ?></li>
              <?php endforeach ?>
            </ul>
          </article>
        </div>

      </section>
    </div>
  </section>
</main>