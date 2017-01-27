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
<div class="container">
    <div class="row">
      <div class="twelve columns">
        <h1 class="page-header">Homemade Cover Scent</h1>
      </div>
    </div><!--row-->
    <div class="row">
      <div class="eight columns materials">
      <h2>Materials Needed</h2>
      <label><input type="checkbox" class="mats"><span>Large Pot</span></label>
      <label><input type="checkbox" class="mats"><span>Empty Spray Bottle</span></label>
      <labeL><input type="checkbox" class="mats"><span>Cheesecloth, or another means of filtering water. An old t-shirt works well in a pinch.</span></label>
      <label><input type="checkbox" class="mats"><span>Vegetation from your desired hunting region.</span></label>
      <span class="tip">&#42; The more aromatic the vegetation, the better your result will be. Evergreen materials, deciduous leaves, nuts and seeds all work well.</span>
    </div>
</div><!--row-->
<div class="row">
    <div class="eight columns">
      <h2>What You'll Do</h2>
      <p><span class="steps">Step 1</span><br> Place your gathered vegetation in to the pot and cover with water. It's best to use as little water as possible. This will help with the concentration of your final product.</p>
    </div>
  </div><!--row-->
  <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/cover_scent/cs_step1.png" alt="Cover Scent Step 1">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 2</span><br> Bring the water to a boil, and let simmer for 20-30 minutes. The longer the better, but be careful not to go too long or you'll begin to lose some of the aroma you're trying to capture.</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/cover_scent/cs_step2.png" alt="Cover Scent Step 2">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 3</span><br>Strain your cover scent through your cheesecloth to remove all of the solids from your product that may clog your spray bottle. Note: To do this thoroughly, you may need to filter more than once. Once filtered, allow to cool.</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/cover_scent/cs_step3.png" alt="Cover Scent Step 3">
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <p><span class="steps">Step 4</span><br>Once cool, transfer scent to your spray bottle. Label if necessary, then you're ready for the field</p>
    </div>
    </div><!--row-->
    <div class="row">
    <div class="eight columns">
      <img class="img-thumbnail responsive-steps" src="_images/cover_scent/cs_step4.png" alt="Cover Scent Step 4">
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
