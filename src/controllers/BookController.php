<?php
require_once 'src/controllers/AppController.php';
require_once __DIR__ . '/../models/Book.php';
require_once  __DIR__.'/../repository/BookRepository.php';

class BookController extends AppController {
    private $messages = [];
    private $bookRepository;

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    public function __construct() {
        parent::__construct();
        $this->bookRepository = new BookRepository();
    }

    public function main() {
        $books = $this->bookRepository->getBooks();
        $this->render('main', ['books' => $books]);
    }
    public function book(int $id) {
        $book = $this->bookRepository->getBook($id);
//        die($book->getId());
        $this->render('book', ['book' => $book]);
    }

    public function addBook() {
        if($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {

            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $book = new book($_SESSION['userId'], $_POST['title'], $_POST['desc'], $_FILES['file']['name']);
            $this->bookRepository->addBook($book);

            return $this->render('main', [
                'messages' => $this->messages, 'books',
                'books' => $this->bookRepository->getBooks()
            ]);
        }


        return $this->render('add', ['messages' => $this->messages]);
    }

    public function search() {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->bookRepository->getBookByTitle($decoded['search']));

        }

    }





    private function validate(array $file): bool {
        if($file['size'] > self::MAX_FILE_SIZE) {
            $this->messages[] = 'Plik jest za duży';
            return false;
        }
        if(!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->messages[] = 'To nie obraz';
            return false;
        }
        return true;
    }




}