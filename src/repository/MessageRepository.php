<?php
require_once 'repository.php';
require_once __DIR__.'/../models/message.php';

class MessageRepository extends repository {
    public function getMessage($id): ?message {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM messages WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $message = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$message) return null;

        return new message(
            $message['id'],
            $message['from_user'],
            $message['to_user'],
            $message['content'],
            $message['timestamp']
        );
    }

    public function getMessages($to_user): array {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM messages WHERE to_user = :id
        ');
        $stmt->bindParam(':id', $to_user, PDO::PARAM_INT);
        $stmt->execute();

        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($messages as $message) {
            $result[] = new message(
                $message['id'],
                $message['from_user'],
                $message['to_user'],
                $message['content'],
                $message['timestamp']
            );
        }

        return $result;
    }

    public function sendMessage($from_user, $to_user) {

    }

}