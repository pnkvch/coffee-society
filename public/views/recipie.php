<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->render('head');?>
  <link href="/public/css/recipie.css" rel="stylesheet" />
</head>
<body>
  <div class="wrapper">
  <?php $this->render('sidebar');?>
  <section class="page-container">
    <h3 class="heading-title"><?= $recipie->getTitle();?></h3>
    <span class="subtitle"><?= $recipie->getSubtitle();?></span>
    <div class="cards-wrapper">
      <p>
        <?= $recipie->getContent();?>
      </p>
    </div>
  </section>
  <div class="article-image-container">
    <img class="article-image" src="/public/images/filter.jpeg" />
  </div>
  </div>
  </body>
</html>