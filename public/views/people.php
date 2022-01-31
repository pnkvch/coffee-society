<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->render('head');?>
  <link href="public/css/people.css" rel="stylesheet" />
  <script type="text/javascript" src="public/js/people.js" async></script>
</head>
<body>
  <div class="wrapper">
  <?php $this->render('sidebar');?>
  <section class="page-container">
    <div class="heading-text">
      <h3>Our Team</h3>
      <span>Let us introduce out main contributers to this project</span>
    </div>
    <div class="cards-wrapper">
      <?php foreach ($users as $user): ?>
        <div class="card">
          <div class="info-section">
            <h5><?= $user->getName(); ?> <?= $user->getSurname(); ?></h5>
            <span>Co-founder & CTO</span>
            <div class="socials">
              <img src="public/images/instagram.svg" />
              <img src="public/images/twitter.svg" />
              <img src="public/images/facebook.svg" />
              <img src="public/images/world.svg" />
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  </div>
  </body>
</html>