<?php

class Book {
    private $title;
    private $description;
    private $cover;
    private $id;



    public function __construct($title, $description, $cover, $id) {
        $this->title = $title;
        $this->description = $description;
        $this->cover = $cover;
        $this->id = $id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function getCover(): string {
        return $this->cover;
    }

    public function setCover(string $cover) {
        $this->cover = $cover;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id;
    }


}