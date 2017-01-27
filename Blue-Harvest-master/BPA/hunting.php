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
        <h1 class="page-header">Hunting</h1>
      </div>
</div>
  <div class="row">
     <div class="six columns ">
       <a href="cover_scent.php" class="project-wrapper">
      <h2>Homemade Cover Scent</h2>
      <p>Create a cover scent using materials gathered from your favorite scouting location!</p>
      <!-- Add Image here for Homemade Cover Scent--><img src="_images/cover_scent/cs_step1.png" alt="Cover Scent Product" class="responsive-img">
      </a>
  </div>
     <div class="six columns">
       <a href="target_stand.php" class="project-wrapper">
  <h2>Bow Target Stand</h2>
  <p>This simple stand will elevate your bow target, helping you keep your skills sharp and sight in your bow before your next trip.</p>
  <!--Add Image here for Bow Target Stand--><img src="_images/archery_stand/ts_step5.gif" alt="Target Stand Final Product" class="responsive-img"><!--image hangs off the screen at 1140px. it may need to by resized to fit (quinn)-->
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
