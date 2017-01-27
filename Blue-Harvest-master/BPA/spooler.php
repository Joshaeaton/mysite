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
<main> <!--(quinn)-->
<div class="container">
    <div class="row">
      <div class="twelve columns">
        <h1 class="page-header">Fishing Line Spooler</h1>
      </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns materials">
      <h2>Materials Needed</h2>
      <label><input type="checkbox" class="mats"><span>3/8 by 6inch bold and suitable hex-nut</span></label>
      <label><input type="checkbox" class="mats"><span>3/8 washers</span></label>
      <label><input type="checkbox" class="mats"><span>3/8 inch wingnut</span></label>
      <label><input type="checkbox" class="mats"><span>Compression spring to fit over the bolt</span></label>
      <label><input type="checkbox" class="mats"><span>10inch by 6inch piece of wood, at least 1 inch thick</span></label>
      <label><input type="checkbox" class="mats"><span>16inch by 6inch piece of wood, at least 1 inch thick</span></label>
      <label><input type="checkbox" class="mats"><span>Wood Screws</span></label>
      <label><input type="checkbox" class="mats"><span>Wood Adhesive</span></label>
      <label><input type="checkbox" class="mats"><span>Drill with drill bits</span></label>
      <label><input type="checkbox" class="mats"><span>Saw, if your wood will need to be trimmed to size</span></label>
    </div>
</div><!--row-->
<div class="row">
    <div class="eight columns">
      <h2>What you'll Do:</h2>
      <p><span class="steps">Step 1</span><br>If they are not already, cut your wood pieces to size. You will need two pieces, one 16 inches long and one 10 inches long. The longer piece will form your base, the shorter will be your standing piece.</p>
    </div>
  </div><!--row-->
  <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/fishing_spool/fs_step1.gif" alt="Fishing Spool Step 1">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 2</span><br> Drill a hole about 2/3 of the way up on the standing piece, ensuring that the hole is centered. On the larger base piece, pre-drill screw holes on the side so you may secure the two pieces of wood together.</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/fishing_spool/fs_step2.gif" alt="Fishing Spool Step 2">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 3</span><br> Construct the frame using the wood screws and the pre-drilled holes on the base. It should form an "L" shape once completed.</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/fishing_spool/fs_step3.gif" alt="Fishing Spool Step 3">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 4</span><br> With the frame constructed, push the bolt through the hole on the upright board and secure. If its a double threaded bolt, use a hex nut and washer to hold in place. If it has a bolt head, press the head in as far as you can amd secure with wood adhesive. Wait for the adhesive to dry before moving on to the next step.</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/fishing_spool/fs_step4.gif" alt="Fishing Spool Step 4">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 5</span><br> Place a washer on the bolt, followed by the compression spring, followed by another washer. The spring keeps the pressure consistant, helping to keep tension on the spool of line. Use another washer, followed by a wing nut to increase or decrease tension on the spool. You're now ready to spool up your favorite reel!</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/fishing_spool/fs_step5.gif" alt="Fishing Spool Step 5">
      <p class="back-to"><a href="fishing.php" title="back to fishing">&larr;Back to Fishing</a></p>
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
