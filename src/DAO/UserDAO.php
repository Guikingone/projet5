<?php

namespace App\src\DAO;

use App\src\model\User;

class UserDAO extends DAO
{
    public function register($post)
    {
        $result = $this->sql('SELECT pseudo FROM user AS u WHERE u.pseudo = :pseudo', [':pseudo' => $post['pseudo']])->fetch();

        if (!empty($result)) {
            $_SESSION['message'] = sprintf('Le pseudo suivant : %s est déjà utilisé, veuillez choisir un autre pseudo', $post['pseudo']);
            return;
        }
        
        $resultMail = $this->sql('SELECT email FROM user AS u WHERE u.email = :email', [':email' => $post['email']])->fetch();

        if (!empty($resultMail)) {
            $_SESSION['message'] = sprintf('L\'email suivant : %s est déjà utilisé, veuillez choisir un autre email', $post['email']);
            return;
        }

        if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $post['email'])) {
            $_SESSION['message'] = sprintf('L\'adresse mail %s n\'est pas valide, veuillez en soumettre une valide', $post['email']);
            return;
        }

        if ($post['password'] != $post['password2']) {
            $_SESSION['message'] = sprintf('Les mots de passe doivent être identiques');
            return;
        }

        extract($user);
        $sql = 'INSERT INTO user (name, pseudo, email, password, date_inscription) VALUES (?, ?, ?, ?, NOW())';
        $this->sql($sql, [$post['name'], $post['pseudo'], $post['email'], password_hash($post['password'], PASSWORD_DEFAULT)]);
        $_SESSION['message'] = sprintf('Enregistrement fait avec succès, vous pouvez vous connecter.');
    }


    public function connection($userName, $email, $password)
    {
        $result = $this->sql('SELECT password, email FROM user AS u WHERE u.pseudo = :username', [':username' => $userName])->fetch();

        if (empty($result)) {
            $_SESSION['message'] = sprintf('Le pseudo suivant : %s est inexistant', $userName);
            return;
        }

        if (!password_verify($password, $result['password'])) {
            $_SESSION['message'] = sprintf('Le mot de passe est invalide', $password);
            return;
        }

        if ($email != $result['email']) {
            $_SESSION['message'] = sprintf('L\'email suivant : %s est invalide', $email);
            return;            
        }
        
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

        $_SESSION['message'] = sprintf('Vous êtes maintenant connecté en tant que "%s"', $userName);
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
