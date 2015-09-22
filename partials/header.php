<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="imagetoolbar" content="no">
  <meta name="msthemecompatible" content="no">
  <meta name="cleartype" content="on">
  <meta name="HandheldFriendly" content="True">
  <meta name="google" value="notranslate">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Zipal</title>

  <link href="static/css/core.css" rel="stylesheet">
  <link href="static/css/main.css" rel="stylesheet">
</head>

<body>
<!-- wrapper -->
<div class="wrapper">

<!-- header -->
<header class="header">
  <div class="header__inner">

    <div class="header__left">
      <button class="header__expand"><span></span></button>

      <!-- logo -->
      <h1 class="header__logo"><a href="/" class="logo" title="На главную" style="background-image: url('static/images/logo.png')">zipal</a></h1>
      <!-- /logo -->
    </div>

    <div class="header__right">
      <? include 'partials/social.php' ?>

      <!-- search -->
      <form action="#" class="header__search search">
        <div class="search__field">
          <input class="search__input" type="text" placeholder="Поиск">
          <button class="search__icon">Найти</button>
        </div>
      </form>
      <!-- /search -->
    </div>

  </div>
</header>
<!-- /header -->