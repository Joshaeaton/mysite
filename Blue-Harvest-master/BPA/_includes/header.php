 <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<section class="header">
      <div class="row">
        <div class="twelve columns">
         <a href="index.php" alt="link to home page"><img class="logo" src="_images/wl_logo.svg" alt="woodsman's log logo" width="320" height="200"></a>
    </div>
  </div><!--row-->
  <div class="row">
    <div class="twelve columns">
  <nav>
      <ul class="topnav" id="myTopnav">
        <li><a href="index.php" <?php if ($currentPage == 'index.php') { echo 'id="current"';} ?>>Home</a></li>
        <li><a href="hunting.php" <?php if ($currentPage == 'hunting.php') { echo 'id="current"';} ?>>Hunting</a></li>
        <li><a href="fishing.php" <?php if ($currentPage == 'fishing.php') { echo 'id="current"';} ?>>Fishing</a></li>
        <li><a href="camping.php" <?php if ($currentPage == 'camping.php') { echo 'id="current"';} ?>>Camping</a></li>
        <li><a href="contact.php" <?php if ($currentPage == 'contact.php') { echo 'id="current"';} ?>>Contact</a></li>
        <li><a href="about_us.php" <?php if ($currentPage == 'about_us.php') { echo 'id="current"';} ?>>About Us</a></li>
        <li class="icon">
          <button href="#" onclick="myFunction()">
            <span class="sr-only">Toggle navigation</span>
            <span class="menu-icon"></span>
            <span class="menu-icon"></span>
            <span class="menu-icon"></span>
          </button>
        </li>
    </ul>
    </nav>
    </div>
  </div><!--row-->
  </section><!--header-->
