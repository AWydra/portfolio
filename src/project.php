<main class="page">
  <section id="project" class="project page__section">
    <header class="title">
      <div class="title__holder">
        <h2 class="title__holder--heading"><?= $heading ?></h2>
      </div>
    </header>
    <div class="project__wrap">
      <section class="project__desc-column">
        <article class="project__desc">
          <header class="title title--project">
            <div class="title__holder">
              <h3 class="title__holder--heading">Opis</h3>
            </div>
          </header>
          <p class="project__desc-content"><?= var_dump($details) ?></p>
        </article>

        <section class="project__gallery"></section>
      </section>
      <section class="project__details-column">
        <article class="project__details">
          <header class="title title--project">
            <div class="title__holder">
              <h3 class="title__holder--heading">Szczegóły</h3>
            </div>
          </header>
          <p class="project__details-content"><?= var_dump($details) ?></p>
        </article>
        <article class="project__technologies">
          <header class="title title--project">
            <div class="title__holder">
              <h3 class="title__holder--heading">Szczegóły</h3>
            </div>
          </header>
          <p class="project__technologies-content">
            <?= var_dump($technologies) ?>
          </p>
        </article>
      </section>
    </div>
  </section>
</main>
