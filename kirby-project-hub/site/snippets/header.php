<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <?php if($page->description() != ''): ?>
  <meta name="description" content="<?php echo html($page->description()) ?>" />
  <?php else: ?>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <?php endif ?>
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link href='//code.cdn.mozilla.net/fonts/fira.css' rel='stylesheet' type='text/css'>
  <?php echo css('assets/css/main.css') ?>
  <?php echo js('assets/js/modernizr.js'); ?>

</head>
<body>

