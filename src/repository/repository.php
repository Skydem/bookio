<?php
require_once __DIR__.'/../../database.php';
class repository {
    protected $database;

    public function __construct() {
        $this->database = new Database();
    }
}