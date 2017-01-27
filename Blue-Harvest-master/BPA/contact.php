<?php
$errors = [];
$missing = [];
include './_includes/title.php';
// check if the form has been submitted
if (isset($_POST['send'])) {
  // email processing script
  $to = 'osu93@yahoo.com'; // use email created for website
  $subject = 'User Comments from Contact Form';
  // expected fields
  $expected = ['firstName', 'lastName', 'email', 'comments' ];
  // set required fields
  $required = ['firstName', 'lastName', 'comments'];
  // create additional headers
  $headers = "From Woodsman's Log<osu93@yahoo.com>\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8';
  require './_includes/processmail.php';
  if ($mailSent) {
    header('Location: http://www.ftclass.com/bpaps/thankyou.php');
    exit;
  }
}
?>
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
<div class="container contact-form">
    <div class="row">
      <div class="twelve columns">
        <h1 class="page-header">Contact Us!</h1>
      </div>
    </div><!--row-->
        <p>Your opinion matters to us. Have something to say? Want to add a suggestion to a project, or just stay up to date on the latest tricks for your favorites? Leave a comment below!</p>
        <p class="tip">&#42; Required fields</p>
    <?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail']))) { ?>
      <p class="tip">Sorry, your mail could not be sent. Please try later.</p>
    <?php } elseif ($missing || $errors) {?>
        <p class="tip">Please fix the item(s) indicated.</p>
        <?php } ?>
        <div class="row">
          <div class="eight columns offset-by-two">
        <div class="form-wrapper">
     <form method="post" action="">
       <label for="firstName">First Name <strong class="tip">&#42;</strong>
       <?php if ($missing && in_array('firstName', $missing)) { ?>
         <span class="tip">Please enter your first name.</span>
         <?php } ?>
       </label>
      <input name="firstName" id="firstName" type="text" placeholder="First Name"><br>
      <label for="lastName">Last Name <strong class="tip">&#42;</strong>
      <?php if ($missing && in_array('lastName', $missing)) { ?>
          <span class="tip">Please enter your last name.</span>
          <?php } ?>
      </label>
      <input name="lastName" id="lastName" type="text" placeholder="Last Name"><br>
      <label for="email">Email<br>(if you would like to receive emails)
      <?php if ($missing && in_array('email', $missing)) { ?>
          <span class="tip">Please enter your email address.</span>
      <?php } elseif (isset($errors['email'])) { ?>
        <span class="tip">Invalid email address</span>
      <?php } ?>
      </label>
      <input name="email" id="email" type="email" placeholder="Email Address"><br>
      <label for="comments">Comments <strong class="tip">&#42;</strong>
      <?php if ($missing && in_array('comments', $missing)) { ?>
          <span class="tip">Please enter your comments.</span>
      <?php } ?>
      </label>
  <textarea name="comments" id="comments" placeholder="What is on your mind?"></textarea><br>
  <input name="send" type="submit" value="Contact">
</form>
</div><!--form container-->
</div>
</div><!--row-->
</div><!--container-->
</main>  <!--(quinn)-->
<?php include './_includes/footer.php'; ?>
<script src="_js/script.js"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body>
</html>
