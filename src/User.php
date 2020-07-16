<?php
namespace App;

class User
{
    public $mail;
    public $name;
    private $lastName;
    private $age;

    public function __construct(string $mail, string $name, string $lastName, int $age){
        $this->$mail = $mail;
        $this->$name = $name;
        $this->$lastName = $lastName;
        $this->$age = $age;

    }

    public function isValide() {
        if($this->$age > 13){
            return true;
        }else{
            return false;
        }
  		
  	}

}
