<?php

namespace App\src\DAO;

use App\src\model\User;

class UserDAO extends DAO
{
    public function register($user)
    {
        extract($user);
        $sql = 'INSERT INTO user (name, pseudo, email, password, date_inscription) VALUES (?, ?, ?, NOW())';
        $this->sql($sql, [$name, $pseudo, $email, $password, $date_inscription]);
    }

    private function buildObject(array $row)
    {
        $user = new User();
        $user->setId($row['id']);
        $user->setName($row['name']);
        $user->setPseudo($row['pseudo']);
        $user->setPseudo($row['email']);
        $user->setPassword($row['password']);
        $user->setDateInscription($row['date_inscription']);
        return $user;
    }
}
