<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User {
        $stmt = $this->database->connect()->prepare('
            SELECT id, name, surname, email, password FROM public.users WHERE email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
          $user['name'],
          $user['surname'],
          $user['email'],
          $user['password'],
          $user['id']
        );
    }

    public function getAllUsers(): array {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT id, name, surname, email, password id FROM public.users
        ');

        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);


        foreach ($users as $user) {
            $result[] = new User (
                $user['name'],
                $user['surname'],
                $user['email'],
                $user['password'],
                $user['id']
            );
        }

        return $result;
    }

    public function addUser(string $email, string $plain_password, string $name, string $surname): void {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.users (name, surname, email, password, created_at)
            VALUES (?, ?, ?, ?, ?)
        ');
        $stmt->execute([
            $email,
            password_hash($plain_password, PASSWORD_DEFAULT),
            $name,
            $surname,
            $date->format('Y-m-d')
        ]);
      }
}