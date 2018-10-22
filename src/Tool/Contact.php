<?php

namespace App\Tool;

use App\Tool\Mailer;

class Contact
{
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

        if (empty($post['username'])) {
            if (empty($post['email'])) {
                if (empty($post['subject'])) {
                    if (empty($post['text'])) {
                        $_SESSION['message'] = sprintf('Vous devez remplir tous les champs');
                        return; 
                    }

                    $_SESSION['message'] = sprintf('Vous devez remplir tous les champs');
                    return; 
                }

                $_SESSION['message'] = sprintf('Vous devez remplir tous les champs');
                return; 
            }
        } else {
            $_SESSION['message'] = sprintf('Vous devez remplir tous les champs');
            return; 
        }
        
        extract($post);

        $mail = new Mailer;
        $mail->sendMailContact($post);
        $_SESSION['message'] = sprintf('Le mail de contact a été envoyé');    
    }
}
