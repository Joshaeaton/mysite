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
</header><!--(quinn)-->
<main><!--(quinn)-->
<div class="container">
    <div class="row">
      <div class="twelve columns">
        <h1 class="page-header">Hand Washing Station</h1>
      </div>
    </div><!--row-->
  <div class="row">
    <div class="eight columns materials">
      <h2>Materials Needed</h2>
      <label><input type="checkbox" class="mats"><span>Large water jug, dedicated to clean water for washing only</span></label>
      <label><input type="checkbox" class="mats"><span>Paper towels and a plastic paper towel holder</span></label>
      <label><input type="checkbox" class="mats"><span>Pump hand soap or bar soap</span></label>
      <label><input type="checkbox" class="mats"><span>Bucket for catching spent water, optional but recommended</span></label>
      <label><input type="checkbox" class="mats"><span>Bungie cords QTY 2</span></label>
    </div>
</div><!--row-->
  <div class="row">
    <div class="eight columns">
      <h2>What you'll Do:</h2>
      <p><span class="steps">Step 1</span><br> Place paper towels in the paper towel holder</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/washing_station/ws_step1.gif" alt="Washing Station Step 1">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 2</span><br> Lay the paper towel holder flat on top of the water jug. Attach by wrapping the bungie cords around the water jug.</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <!--Add Second Step Image Here--><img class="img-thumbnail responsive-steps" src="_images/washing_station/ws_step2.gif" alt="Washing Station Step 2">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 3</span><br> Position the water jug, along with the soap and empty bucket, at the edge of a table or bench. Place the empty bucket under the spigot. Your portable wash station is now complete!</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/washing_station/ws_step3.gif" alt="Washing Station Step 3">
      <p class="back-to"><a href="camping.php" title="back to camping">&larr;Back to Camping</a></p>
    </div>
</div><!--row-->
</div><!--container-->
</main><!--(quinn)-->
<?php include './_includes/footer.php'; ?>

<script src="_js/script.js"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
