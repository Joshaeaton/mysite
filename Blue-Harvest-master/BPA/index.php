<?php include './_includes/title.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Woodsman's Log<?php if (isset($title)) {echo "&#8212;{$title}";} ?></title>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans%7cSpecial+Elite" rel="stylesheet">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="_css/styles.css">
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header><!--(quinn)-->
  <div class="container fluid">
  <?php include './_includes/header.php'; ?>
  </div> <!--container(quinn)-->
  </header> <!--(quinn)-->
  <main> <!--(quinn)-->
  <div class="container fluid">
    <div id="banner">
    <div class="row">
      <div class="twelve columns">
<h1>get out and create.</h1>
      </div>
    </div><!--row-->
  </div><!--banner-->
<section id="categories">
  <div class="row">
    <a href="hunting.php" class="one-third column cat-icon">
      <img class="circle-img" src="_images/hunting_icon.gif" alt="hunting icon">
      <h3>Hunting</h3>
  </a>
  <a href="fishing.php" class="one-third column cat-icon">
    <img class="circle-img" src="_images/fishing_icon.gif" alt="fishing icon">
    <h3>Fishing</h3>
</a>
<a href="camping.php" class="one-third column cat-icon">
  <img class="circle-img" src="_images/camping_icon.gif" alt="camping icon">
  <h3>Camping</h3>
</a>
</div><!--row-->
</section><!--categories-->
</div><!--container-->
</main>
 <?php include './_includes/footer.php'; ?>
<script src="_js/script.js"></script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
