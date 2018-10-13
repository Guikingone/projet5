<?php

namespace App\model;

class Contact
{
    private $username;

    private $email;

    private $subject;

    private $text;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    public function buildContact ($post)
    {
        if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $post['email'])) {
            $_SESSION['message'] = sprintf('L\'adresse mail %s n\'est pas valide, veuillez en soumettre une valide', $post['email']);
            return;
        }

        if (!preg_match("#^[a-zA-Z0-9_]{3,16}$#", $post['username'])) {
            $_SESSION['message'] = sprintf('Le nom %s n\'est pas valide, veuillez en soumettre un valide', $post['username']);
            return;
        }

        if (empty($post['username'] OR $post['email'] OR $post['subject'] OR $post['text'])) {
            $_SESSION['message'] = sprintf('Vous devez remplir tous les champs');
            return;
        }

        $this->setUsername($_POST['username']);
        $this->setEmail($_POST['email']);
        $this->setSubject($_POST['subject']);
        $this->setText($_POST['text']);

        
        $to      = 'dimitri.subrini@gmail.com';
        $subject = 'Formulaire du blog : ' . $post['subject'];
        $message = 'Message envoyé par : ' . $post['username'] . "\r\nSujet : " . $post['text'];
        $headers = 'From: ' . $post['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        mail($to, $subject, $message, $headers);
        
    }
}
