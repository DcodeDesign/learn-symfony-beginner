<?php

namespace App\Service;

class Greeter {
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
    
    public function greet () {
        return $this->message;
    }

}