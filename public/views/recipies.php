<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->render('head');?>
  <link href="public/css/recipies.css" rel="stylesheet" />
</head>
<body>
  <div class="wrapper">
  <?php $this->render('sidebar');?>
  <section class="page-container">
    <div class="cards-wrapper">
      <?php foreach ($recipies as $recipie): ?>
        <div class="card">
          <div class="upper-section">
            <h5><?= $recipie->getTitle(); ?></h5>
          </div>
          <div class="social-interaction">
            <div class="counters">
              <img src="public/images/clock.svg" />
              <span>1h ago</span>
            </div>
            <div class="social-interaction">
              <span>SHARE</span>
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