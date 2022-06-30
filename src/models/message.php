<?php

class message {
    private $id;
    private $from_user;
    private $to_user;
    private $content;
    private $timestamp;

    public function __construct($id, $from_user, $to_user, $content, $timestamp)
    {
        $this->id = $id;
        $this->from_user = $from_user;
        $this->to_user = $to_user;
        $this->content = $content;
        $this->timestamp = $timestamp;
    }

    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }

    public function getFrom_user(): int {
        return $this->from_user;
    }
    public function setFrom_user(int $from_user) {
        $this->from_user = $from_user;
    }

    public function getTo_user(): int {
        return $this->to_user;
    }
    public function setTo_user(int $to_user) {
        $this->to_user = $to_user;
    }

    public function getContent(): string {
        return $this->content;
    }
    public function setContent(string $content) {
        $this->content = $content;
    }

    public function getTimestamp(): int {
        return $this->timestamp;
    }
    public function setTimestamp(int $timestamp) {
        $this->timestamp = $timestamp;
    }




}