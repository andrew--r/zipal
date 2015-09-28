<? include 'partials/header.php' ?>

<!-- nav -->
<div class="nav nav--gray">
  <ul class="nav__inner">
    <li class="nav__item nav__item--active"><a href="#" class="nav__link">Главная</a></li>
    <li class="nav__item"><a href="#" class="nav__link">Новости</a></li>
    <li class="nav__item"><a href="#" class="nav__link">Ситуация</a></li>
    <li class="nav__item"><a href="#" class="nav__link">Город</a></li>
    <li class="nav__item"><a href="#" class="nav__link">Бизнес</a></li>
    <li class="nav__item"><a href="#" class="nav__link">Стиль</a></li>
    <li class="nav__item"><a href="#" class="nav__link">Еда</a></li>
    <li class="nav__item"><a href="#" class="nav__link">Дом</a></li>
    <li class="nav__item"><a href="#" class="nav__link">Weekend</a></li>
  </ul>
</div>
<!-- /nav -->

<!-- main-lead -->
<div class="main-lead main-lead--category">
  <div class="main-lead__inner">
    <!-- preview-big -->
    <div class="preview-big preview-big--text">
      <div class="preview-big__content">
        <div class="preview-big__text">
          <h2 class="preview-big__title"><a href="#">Подать объявление о продаже: ТОП-5 рекламных сайтов недвижимости</a></h2>
          
          <p class="preview-big__description">Самая большая ложь сегодняшнего времени: «Я прочитал правила соглашения и согласен с ними». На самом деле, приступая к работе с досками объявлений, мало кто читает описание рекламных сервисов и с удивлением обнаруживает сюрпризы уже в процессе работы. Мы решили сэкономить ваше время и сделали мини обзоры для пяти самых популярных федеральных сайтов недвижимости: ИРР, Циан, Авито, Mail. Недвижимость и Мир Квартир.</p>
        </div>

        <div class="preview-big__meta">
          <? include 'partials/stats.php' ?>
        </div>
      </div>
    </div>
    <!-- preview-big -->

    <!-- main-lead__grid -->
    <div class="main-lead__grid">
      <!-- превью без картинки -->
      <div class="main-lead__item">
        <div class="preview">
          <div class="preview__content">
            <h2 class="preview__title"><a href="/post">Одинокий дедушка желает познакомиться, или Как эффектно подать объявление о продаже/аренде жилья</a></h2>
            <p class="preview__description">Текст самих объявлений о продаже не отстает — пара предложений и классический призыв «Звоните!», чего делать после прочтения вовсе не хочется…</p>
          </div>
        </div>
      </div>
      <!-- /preview -->
      <? for ($i = 0; $i < 8; $i++) { ?>
        <div class="main-lead__item">
          <? include 'partials/preview.php' ?>
        </div>
      <? } ?>
    </div>
    <!-- /main-lead__grid -->

    <a class="main-lead__btn" href="#">Загрузить больше</a>

  </div>
</div>
<!-- /main-lead -->

<? include 'partials/footer.php' ?>