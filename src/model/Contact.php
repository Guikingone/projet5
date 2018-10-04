<?php

namespace App\src\model;

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

    public function buildContact ($username, $email, $subject, $text)
    {
        $this->setUsername($_POST['username']);
        $this->setEmail($_POST['email']);
        $this->setSubject($_POST['subject']);
        $this->setText($_POST['text']);

        $to      = 'dimitri.subrini@gmail.Com';
        $subjects = $subject;
        $message = $text;
        $headers = 'From: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
   
        mail($to, $subjects, $message, $headers);
    }
}
