<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/index-min.css') ?>

  <!-- FontAwesome Icons -->
  <?= js(array(
      'assets/js/fontawesome.js',
      'assets/js/brands.min.js',
      // 'assets/js/light.min.js',
      // 'assets/js/regular.min.js',
  ), true) ?>

</head>
<body>

