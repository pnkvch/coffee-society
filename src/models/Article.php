<?php

class Article
{
    private $id;
    private $title;
    private $subtitle;
    private $content;

    public function __construct(int $id, string $title, string $subtitle, string $content) {
        $this->id = $id;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
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
}