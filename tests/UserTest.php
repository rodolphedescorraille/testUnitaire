<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
  //mail
  public function testMailValid() {
    $user = new User('rodolphe@gmail.com','rodolphe','de Scorraille', 15);
    $mail = $user->mail;
    $this->assertNotEmpty($mail);
  }

  //name
  public function testNameValid() {
    $user = new User('rodolphe@gmail.com','rodolphe','de Scorraille', 15);
    $name = $user->name;
    $this->assertNotEmpty($name);
  }

  //lastName
  public function testLastNameValid() {
    $user = new User('rodolphe@gmail.com','rodolphe','de Scorraille', 15);
    $lastName = $user->lastName;
    $this->assertNotEmpty($lastName);
  }


  // age valid
  public function testAgeInputValid() {
    $ageValide = new User('rodolphe@gmail.com','rodolphe','de Scorraille', 15);
    $ageValide = $ageValide->isValide();
    $this->assertTrue($ageValide);
  }

  public function testAgeInputNotValid() {
    $ageValide = new User('rodolphe@gmail.com','rodolphe','de Scorraille', 12);
    $ageValide = $ageValide->isValide();
    $this->assertFalse($ageValide);
  }

}
