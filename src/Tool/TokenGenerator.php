<?php

namespace App\Tool;

class TokenGenerator 
{
    public $token;

    public function __construct()
    {
        $this->generateInt();
    }
    
    public function __toString()
    {
        return (String)$this->token;
    }

    public function generateInt() 
    {
        $nbr = random_int(1000000000000000, 1000000000000000000);
        return $this->token = $nbr;
    }

}