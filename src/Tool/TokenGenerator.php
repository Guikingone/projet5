<?php

namespace App\Tool;

class TokenGenerator 
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
        $token = random_int(1000000000000000, 1000000000000000000);
        var_dump($token);
    }
    
    public function __toString()
    {
        return $this->token;
    }

}