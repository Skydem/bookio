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

    public function addBook() {
        if($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {

            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $book = new book($_POST['title'], $_POST['desc'], $_FILES['file']['name']);
            $this->bookRepository->addBook($book);

            return $this->render('main', ['messages' => $this->messages, 'book'=> $book]);
        }


        return $this->render('add', ['messages' => $this->messages]);
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