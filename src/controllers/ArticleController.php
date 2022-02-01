<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/ArticleRepository.php';

class ArticleController extends AppController {
  private $articleRepository;

  public function __construct() {
      parent::__construct();
      $this->articleRepository = new ArticleRepository();
  }

  public function feed() {
    $articles = $this->articleRepository->getArticles();
    $this->render('feed', ['articles' => $articles]);
  }

  public function recipies() {
    $recipies = $this->articleRepository->getRecipies();
    $this->render('recipies', ['recipies' => $recipies]);
  }

  public function recipie(int $recipieId) {
    $recipie = $this->articleRepository->getRecipie($recipieId);
    $this->render('recipie', ['recipie' => $recipie]);
  }
}