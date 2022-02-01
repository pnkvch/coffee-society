<?php

class Article
{
    private $id;
    private $title;
    private $subtitle;
    private $content;
    private $likes;
    private $dislikes;

    public function __construct(int $id, string $title, string $subtitle, string $content, int $likes = 0, int $dislikes = 0) {
        $this->id = $id;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
        $this->likes = $likes;
        $this->dislikes = $dislikes;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getSubtitle(): string {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle) {
        $this->subtitle = $subtitle;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function setContent(string $content) {
        $this->content = $content;
    }

    public function getLikes(): string {
        return $this->likes;
    }

    public function setLikes(string $likes) {
        $this->likes = $likes;
    }

    public function getDislikes(): string {
        return $this->dislikes;
    }

    public function setDislikes(string $dislikes) {
        $this->dislikes = $dislikes;
    }
}