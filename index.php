<? include 'partials/header.php' ?>
<? include 'partials/nav.php' ?>

<!-- main-lead -->
<div class="main-lead">
  <div class="main-lead__inner">
    <!-- preview-big -->
    <? include 'partials/preview-big.php' ?>
    <!-- preview-big -->

    <!-- main-lead__grid -->
    <div class="main-lead__grid">
      <? for ($i = 0; $i < 4; $i++) { ?>
        <div class="main-lead__item">
          <? include 'partials/preview.php' ?>
        </div>
      <? } ?>
    </div>
    <!-- /main-lead__grid -->

  </div>
</div>
<!-- /main-lead -->


<!-- posts -->
<div class="posts">
  <div class="posts__inner">
    <h2 class="posts__title"><span>Новости<span></h2>

    <div class="posts__container">
      <div class="posts__left">
        <!-- preview-medium -->
        <? include 'partials/preview-medium.php' ?>
        <!-- /preview-medium -->
      </div>
      <div class="posts__right">
        <? for ($i = 0; $i < 4; $i++) { ?>
          <? include 'partials/preview.php' ?>
        <? } ?>
      </div>
    </div>

  </div>
</div>
<!-- /posts -->


<!-- posts -->
<div class="posts">
  <div class="posts__inner">
    <h2 class="posts__title"><span>Ситуация<span></h2>

    <div class="posts__container">
      <div class="posts__left">
        <!-- preview-medium -->
        <? include 'partials/preview-medium.php' ?>
        <!-- /preview-medium -->
      </div>
      <div class="posts__right">
        <!-- preview-medium -->
        <div class="preview-medium preview-medium--wide-cover">
          <h3 class="preview-medium__title"><a href="#">Начались летние Суперскидки до 50%! «Заряди» рекламу до&nbsp;конца лета!</a></h3>

          <a class="preview-medium__thumb" href="#" style="background-image: url(static/images/thumb5.jpg)"></a>
        </div>
        <!-- /preview-medium -->
        <? for ($i = 0; $i < 3; $i++) { ?>
          <? include 'partials/preview.php' ?>
        <? } ?>
      </div>
    </div>

  </div>
</div>
<!-- /posts -->


<!-- similar -->
<div class="posts posts--similar">
  <div class="posts__inner">
    <h2 class="posts__title"><span>Похожие<span></h2>

    <div class="posts__slider">
      <? for ($i = 0; $i < 9; $i++) { ?>
        <div class="posts__slide">
          <? include 'partials/preview-small.php' ?>
        </div>
      <? } ?>
    </div>
  </div>
</div>
<!-- /similar -->

<? include 'partials/footer.php' ?>