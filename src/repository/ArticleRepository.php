<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Article.php';

class ArticleRepository extends Repository
{
  public function getRecipies(): array {
    $result = [];
    $stmt = $this->database->connect()->prepare('
        SELECT id, title, subtitle, content FROM public.recipies natural join public.content_recipies
    ');

    $stmt->execute();

    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($articles as $article) {
        $result[] = new Article (
            $article['id'],
            $article['title'],
            $article['subtitle'],
            $article['content'],
        );
    }

    return $result;
  }

  public function getArticles(): array {
    $result = [];
    $stmt = $this->database->connect()->prepare('
        SELECT id, title, subtitle, content, likes, dislikes FROM public.articles natural join public.content_articles
    ');

    $stmt->execute();

    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($articles as $article) {
        $result[] = new Article (
            $article['id'],
            $article['title'],
            $article['subtitle'],
            $article['content'],
            $article['likes'],
            $article['dislikes'],
        );
    }

    return $result;
  }
}