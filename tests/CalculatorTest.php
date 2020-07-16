<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
  // Addition
  public function testAddValid() {
    $add = new Calculator();
    $add = $add->add(4,2);
    $this->assertEquals(6,$add);
  }

  public function testAddNotValid() {
    $add = new Calculator();
    $add = $add->add(4,2);
    $this->assertNotEquals(200,$add);
  }

  // Substraction
  public function testSubValid() {
    $sub = new Calculator();
    $sub = $sub->sub(4,2);
    $this->assertEquals(2,$sub);
  }

  public function testSubNotValid() {
    $sub = new Calculator();
    $sub = $sub->sub(4,2);
    $this->assertNotEquals(3,$sub);
  }

  // Multiplication
  public function testMulValid() {
    $mul = new Calculator();
    $mul = $mul->mul(5,5);
    $this->assertEquals(25,$mul);
  }

  public function testMulNotValid() {
    $mul = new Calculator();
    $mul = $mul->mul(5,5);
    $this->assertNotEquals(30,$mul);
  }

  // Division
  public function testDivValid() {
    $div = new Calculator();
    $div = $div->div(100,2);
    $this->assertEquals(50,$div);
  }

}
