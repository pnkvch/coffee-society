<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->render('head');?>
  <link href="public/css/feed.css" rel="stylesheet" />
  <script type="text/javascript" src="public/js/coffeePhotos.js" async></script>
</head>
<body>
  <div class="wrapper">
  <?php $this->render('sidebar');?>
  <section class="page-container">
    <div class="cards-wrapper">
      <?php foreach ($articles as $article): ?>
        <div class="card">
          <div class="upper-section">
            <h5><?= $article->getTitle(); ?></h5>
            <span><?= $article->getSubtitle(); ?></span>
          </div>
          <div class="social-interaction">
            <div class="counters">
              <img src="public/images/heart.svg" />
              <span><?= $article->getLikes(); ?></span>
              <img src="public/images/comment.svg" />
              <span><?= $article->getDislikes(); ?></span>
            </div>
            <span>SHARE</span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  </div>
  </body>
</html>