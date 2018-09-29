<?php

namespace App\src\DAO;

use App\src\model\User;

class UserDAO extends DAO
{
    public function register($name, $pseudo, $email, $password, $password2)
    {
        $result = $this->sql('SELECT pseudo FROM user AS u WHERE u.pseudo = :pseudo', [':pseudo' => $name])->fetch();

        if (!empty($result)) {
            $_SESSION['message'] = sprintf('The following username %s is already used, please choose another', $name);
            return;
        }
        
        $resultMail = $this->sql('SELECT email FROM user AS u WHERE u.email = :email', [':email' => $email])->fetch();

        if (!empty($resultMail)) {
            $_SESSION['message'] = sprintf('The following email %s is already used, please choose another', $name);
            return;
        }

        if ($password != $password2) {
            $_SESSION['message'] = sprintf('Passwords have to be similar', $userName);
            return;
        }

        extract($user);
        $sql = 'INSERT INTO user (name, pseudo, email, password, date_inscription) VALUES (?, ?, ?, ?, NOW())';
        $this->sql($sql, [$name, $pseudo, $email, password_hash($password, PASSWORD_DEFAULT)]);
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

    public function correctPassword($userName, $email, $password)
    {
        $result = $this->sql('SELECT password, email FROM user AS u WHERE u.pseudo = :username', [':username' => $userName])->fetch();

        if (empty($result)) {
            $_SESSION['message'] = sprintf('The following username %s doest not exist', $userName);
            return;
        }

        if (!password_verify($password, $result['password'])) {
            $_SESSION['message'] = sprintf('The following password %s is not valid', $password);
            return;
        }

        if ($email != $result['email']) {
            $_SESSION['message'] = sprintf('The following email %s doest not exist', $email);
            return;            
        }
        /** 
        *if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $post['email'])) {
        *    $_SESSION['message'] = sprintf('ca marche pas !', $email);
        *    return;
        *}
        */

        $user = $this->sql('SELECT id, name, pseudo, email, password, date_inscription AS dateInscription, admin FROM user AS u WHERE u.pseudo = :username', [':username' => $userName]);
        $user->setFetchMode(\PDO::FETCH_CLASS, User::class);
        $result = $user->fetch();

        if (\is_null($result)) {
            $_SESSION['message'] = sprintf('The following username %s doest not exist', $userName);
            return;
        }
        $_SESSION['user'] = [
            'id' => $result->getId(),
            'name' => $result->getName(),
            'pseudo' => $result->getPseudo(),
            'email' => $result->getEmail(),
            'dateInscription' => $result->getDateInscription(),
            'admin' => $result->getAdmin()
        ];

        $_SESSION['message'] = sprintf('The following user %s is now connected', $userName);
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
