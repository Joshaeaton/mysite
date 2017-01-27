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
</div><!--container-->
</header><!--(quinn)-->
<main><!--(quinn)-->
<div class="container">
    <div class="row">
      <div class="twelve columns">
        <h1 class="page-header">Bow Target Stand</h1>
      </div>
      </div><!--row-->
      <div class="row">
    <div class="eight columns materials">
      <h2>Materials Needed</h2>
      <label><input type="checkbox" class="mats"><span>8ft 2x4   QTY 3</span></label>
      <label><input type="checkbox" class="mats"><span>"L" Brackets with screws    QTY 6</span></label>
      <label><input type="checkbox" class="mats"><span>Bungie cords    QTY 2</span></label>
      <label><input type="checkbox" class="mats"><span>Archery Bag Target</span></label>
      <label><input type="checkbox" class="mats"><span>Saw</span></label>
      <label><input type="checkbox" class="mats"><span>Drill</span></label>
      <label><input type="checkbox" class="mats"><span>Tape Measure</span></label>
      <label><input type="checkbox" class="mats"><span>Wood Screws</span></label>
    </div>
</div><!--row-->
<div class="row">
    <div class="eight columns">
      <h2>What you'll Do:</h2>
      <p><span class="steps">Step 1</span><br> Cut two of the 2x4s in half, leaving you with 4 4ft boards. These will act as the feet and legs of your target stand.</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/archery_stand/ts_step1.gif" alt="Target Stand Step 1">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 2</span><br> Measure a 3ft section of the remaining 2x4 and cut, This will act as the cross member of your stand, where you will hang the target. Set this piece aside for now.</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/archery_stand/ts_step2.gif" alt="Target Stand Step 2">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 3</span><br> Lay one of the 4ft boards flat on your work surface. Measure the placement of the leg halfway down the foot, about 2 feet. Attach the leg to the foot using two "L" brackets on either side of the leg. Repeat these steps for the other side.</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/archery_stand/ts_step3.gif" alt="Target Stand Step 3">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 4</span><br> Take the 3ft board and lay it across the top of the two legs, being sure to make the edges flush. Secure in to place with 2 wood screws on either side. Reinforce with two "L" brackets on the inside corners.</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/archery_stand/ts_step4.gif" alt="Target Stand Step 4">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 5</span><br> Using the two Bungie Cords, attach your target bag to the top cross memeber of your stand. You're now ready to take aim!</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/archery_stand/ts_step5.gif" alt="Target Stand Step 5">
      <p class="back-to"><a href="hunting.php" title="back to hunting">&larr;Back to Hunting</a></p>
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
