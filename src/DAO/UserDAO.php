<?php

namespace App\src\DAO;

use App\src\model\User;

class UserDAO extends DAO
{
    public function register($user)
    {
        extract($user);
        $sql = 'INSERT INTO user (name, pseudo, email, password, date_inscription) VALUES (?, ?, ?, ?, NOW())';
        $this->sql($sql, [$name, $pseudo, $email, $password]);
    }

    public function connection($user)
    {
        $sql = 'SELECT id, name, pseudo, email, password, date_inscription, admin FROM user';
        $result = $this->sql($sql);
        $row = $result->fetch();
        if($row) {
            return $this->buildObject($row);

        } else {
            echo 'Aucun utilisateur avec ce pseudo est enregistré';
        }
    }

    public function correctPassword()
    {
        $this->password_verify($_POST['password'], $result['password']);
        if (!$result)
        {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        else
        {
            if ($isPasswordCorrect) 
            {
                session_start();
                $_SESSION['id'] = $result['id'];
                $_SESSION['pseudo'] = $pseudo;
                echo 'Vous êtes connecté !';
            }
            else 
            {
                echo 'Mauvais identifiant ou mot de passe !';
            }
        }
                
    }

    private function buildObject(array $row)
    {
        $user = new User();
        $user->setId($row['id']);
        $user->setName($row['name']);
        $user->setPseudo($row['pseudo']);
        $user->setEmail($row['email']);
        $user->setPassword($row['password']);
        $user->setDateInscription($row['date_inscription']);
        $user->setAdmin($row['admin']);
        return $user;
    }
}
