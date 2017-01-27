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
     <?php require './_includes/header.php'; ?>
</div><!--container fluid-->
</header> <!--(quinn)-->
<main> <!--(quinn)-->
<div class="container preview">
    <div class="row">
      <div class="twelve columns">
        <h1 class="page-header">Camping</h1>
      </div>
     </div>
  <div class="row">
    <div class="six columns">
      <a href="washing_station.php" class="project-wrapper">
      <h2>Hand Washing Station</h2>
      <p>Keep yourself and your camp kitchen clean with this portable solution</p>
      <!-- Add Image here for Washing Station--><img src="_images/washing_station/ws_step3.gif" alt="Washing Station Final Product" class="responsive-img">
      </a>
</div>
<div class="six columns"><!--add border(quinn)-->
  <a href="firewood_sling.php" class="project-wrapper">
  <h2>Firewood Sling</h2>
  <p>Gather and carry firewood quickly and easily</p>
  <!--Add Image here for Firewood Sling--><img src="_images/firewood_sling/fs_materials.png" alt="Firewood Sling Materials" class="responsive-img">
  </a>
</div>
</div><!--row-->
</div><!--container-->
</main> <!--(quinn)-->
<?php include './_includes/footer.php'; ?>
<script src="_js/script.js"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
