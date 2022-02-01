<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/ArticleRepository.php';

class ArticleController extends AppController {
  private $articleRepository;

  public function __construct() {
      parent::__construct();
      $this->articleRepository = new ArticleRepository();
  }

  public function recipies() {
    $recipies = $this->articleRepository->getRecipies();
    $this->render('recipies', ['recipies' => $recipies]);
  }
}