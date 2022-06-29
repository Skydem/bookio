<?php
require_once 'repository.php';
require_once __DIR__ . '/../models/Book.php';

class BookRepository extends repository {
    public function getBook(int $id): ?Book {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM books WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$book) {
            return null;
        }

        return new Book(
            $book['title'],
            $book['desc'],
            $book['cover']
        );
    }

    public function addBook(Book $book) {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO books (user_id, title, description, cover) VALUES (1, ?, ?, ?)
        ');
        $stmt->execute([
            $book->getTitle(),
            $book->getDescription(),
            $book->getCover()
        ]);
    }
}