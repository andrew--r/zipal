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
    <? include 'partials/preview-big.php' ?>
    <!-- preview-big -->

    <!-- main-lead__grid -->
    <div class="main-lead__grid">
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