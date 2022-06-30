<?php

class Book {
    private $user_id;
    private $title;


    private $description;
    private $cover;
    private $id;



    public function __construct($user_id, $title, $description, $cover, $id=0) {
        $this->user_id = $user_id;
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

    public function getUserId():int {
        return $this->user_id;
    }
    public function setUserId(int $user_id) {
        $this->user_id = $user_id;
    }


}