<?php
namespace App;

class Calculator
{
    private $a;
    private $b;

    public function __construct() {
    }

    public function add(int $a, int $b) {
  		return $a + $b;
  	}

    public function sub(int $a, int $b) {
  		return $a - $b;
  	}

    public function mul(int $a, int $b) {
  		return $a * $b;
  	}

    public function div(int $a, int $b) {
  		return $a / $b;
  	}

}
