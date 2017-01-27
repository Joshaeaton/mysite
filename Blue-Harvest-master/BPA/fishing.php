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
        <h1 class="page-header">Fishing</h1>
      </div>
</div>
  <div class="row">
     <div class="six columns">
       <a href="minnow_trap.php" class="project-wrapper">
      <h2>Minnow Trap</h2>
      <p>Use household materials to catch bait the next time you're on the dock!</p>
      <!-- Add Image here for Homemade Minnow Trap--><img src="_images/minnow_trap/mt_step6.png" alt="Minnow Trap Final Product" class="responsive-img">
      </a>
  </div>
      <div class="six columns">
        <a href="spooler.php" class="project-wrapper">
  <h2>Fishing Line Spooler</h2>
  <p>Spool up your favorite reel in a snap</p>
  <!--Add Image here for Fishing Line Spooler--><img src="_images/fishing_spool/fs_step5.gif" alt="Fishing Spool Final Product" class="responsive-img">
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
