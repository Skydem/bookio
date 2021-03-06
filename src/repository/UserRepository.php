<?php
require_once 'repository.php';
require_once __DIR__.'/../models/user.php';

class UserRepository extends repository {
    public function getUser(string $email): ?user {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$user) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname'],
            $user['id'],
            $user['role']
        );
    }

    public function addUser($user) {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (name, surname, email, password) VALUES (?,?,?,?)'
        );
        $stmt->execute([
            $user->getName(),
            $user->getsurname(),
            $user->getEmail(),
            $user->getPassword()
        ]);
    }
}