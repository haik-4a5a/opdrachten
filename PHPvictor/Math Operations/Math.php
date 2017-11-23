<?php
/**
 * Math Operation
 */
abstract class MathOperation
{

    protected $numbers = null;
    protected $result = null;

    public function __construct($arr)
    {
    $this->numbers = $arr;

    }

    public function GetNumber1()
    {
      return $this->num1;
    }

    public function GetNumber2()
    {
      return   $this->num2;
    }

    abstract public function calculate();
}

// Vermenigvuldigen

class MathKeer extends MathOperation
{
  public function calculate(){
    $result = $this->numbers[0];
    for ($i = 1; $i < count($this->numbers); $i++) {
      $result *= $this->numbers[$i];

    }
    return $result;
  }
}





class MathPlus extends MathOperation
{


public function calculate(){
  $result = $this->numbers[0];
  for ($i = 1; $i < count($this->numbers); $i++) {
    $result += $this->numbers[$i];

  }
  return $result;

}

}


// aftrekken
class MathMin extends MathOperation
{



public function calculate(){
  $result = $this->numbers[0];
  for ($i = 1; $i < count($this->numbers); $i++) {
    $result -= $this->numbers[$i];

  }
  return $result;

}


}

$numbers = [2,3,4,5];

$tellen = new MathPlus($numbers);

echo $tellen->calculate();








 ?>
