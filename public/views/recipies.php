<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->render('head');?>
  <link href="public/css/recipies.css" rel="stylesheet" />
  <script type="text/javascript" src="public/js/coffeePhotos.js" async></script>
</head>
<body>
  <div class="wrapper">
  <?php $this->render('sidebar');?>
  <section class="page-container">
    <div class="cards-wrapper">
      <?php foreach ($recipies as $recipie): ?>
        <div class="card" onclick='$recipie'>
          <div class="upper-section">
            <h5><?= $recipie->getTitle(); ?></h5>
          </div>
          <div class="social-interaction">
            <div class="counters">
              <img src="public/images/clock.svg" />
              <span>1h ago</span>
            </div>
            <div class="social-interaction">
              <a href="/recipie/<?= $recipie->getId();?>">Read</a>
              <img src="public/images/arrow.svg" />
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  </div>
  </body>
</html>