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
            $book['description'],
            $book['cover'],
            $book['id']
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
    public function getBooks(): array {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM books
        ');
        $stmt->execute();
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($books as $book) {
            $result[] = new Book(
                $book['title'],
                $book['description'],
                $book['cover'],
                $book['id']
            );
        }

        return $result;
    }

    public function getBookByTitle(string $searchString) {
        $searchString = '%'.strtolower($searchString).'%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM books WHERE LOWER(title) LIKE :searchString OR LOWER(description) LIKE :searchString
        ');

        $stmt->bindParam(':searchString', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}