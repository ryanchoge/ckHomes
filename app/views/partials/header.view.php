<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title> <?= esc(APP_NAME) ?> </title>
</head>
<body>
  <?php
    $no_nav = array("login", "home", "apartment-add");
    ?>
    <?php if(!in_array($controller, $no_nav)): ?>
      <?php require view_path('partials/nav'); ?>
      <?php endif; ?>
      <div class="container-fluid" style="min-width: 350px;">