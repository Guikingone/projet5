<?php

namespace App\Tool;

class Mailer 
{
    public function sendMail($post, $token)
    {
        try {
            $transport = (new \Swift_SmtpTransport('votresmtp', 465, 'ssl'))
                ->setUsername('votre mail')
                ->setPassword('votre mdp');
         
            $mailer = new \Swift_Mailer($transport);

            $message = new \Swift_Message();

            $message->setSubject('Email de récuperation de mot de passe');
         
            $message->setFrom([$post['email'] => $post['pseudo']]);
         
            $message->addTo('votre mail','votre nom de site');

            $message->setBody('Bonjour : '.$post['pseudo'].'<br>
                            Voici le lien que vous devez suivre pour remplacer le mot de passe
                            <a href="http://blogprojet5.local/newpassword?token='.$token.'">Cliquez ici</a>', 'text/html');
         
            $result = $mailer->send($message);
        } catch (Exception $e) {

          echo $e->getMessage();

        }
    }

    public function sendMailContact($post)
    {
        try {
            $transport = (new \Swift_SmtpTransport('votresmtp', 465, 'ssl'))
                ->setUsername('votre mail')
                ->setPassword('votre mdp');
         
            $mailer = new \Swift_Mailer($transport);

            $message = new \Swift_Message();

            $message->setSubject('Sujet : ' . $post['subject']);
         
            $message->setFrom([$post['email'] => $post['username']]);
         
            $message->addTo('votre mail','votre nom de site');

            $message->setBody('Voici le message envoyé par le formulaire de contact : <br>'.$post['text'] .'', 'text/html');
         
            $result = $mailer->send($message);
        } catch (Exception $e) {

          echo $e->getMessage();

        }
    }

}