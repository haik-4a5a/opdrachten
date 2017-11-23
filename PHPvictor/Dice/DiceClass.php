<?php
/**
 * yathzee
 */
abstract class DiceGlobal
{
    protected $roll = null;


    abstract public function getDice();

    public function randomNum()
    {
        return rand(0, 5);
    }



    protected function getRandomDice($a)
    {
        return '<img style="max-width: 10%;" src="img/' . $a . '">';
    }
}


/**
 * Dice normal
 */
class DiceNormal extends DiceGlobal
{
    private $DiceImg = array(
  'dice-six-faces-one.png',
  'dice-six-faces-two.png',
  'dice-six-faces-three.png',
  'dice-six-faces-four.png',
  'dice-six-faces-five.png',
  'dice-six-faces-six.png'
);


    public function __construct()
    {
        $this->DiceImg;
    }


    public function getDice()
    {
        $random = $this->DiceImg[$this->randomNum()];
        return  $this->getRandomDice($random);
    }
}


/**
 *
 */
class DicePerspective extends DiceGlobal
{
    private $DiceImg = array(
  'perspective-dice-one.png',
  'perspective-dice-two.png',
  'perspective-dice-three.png',
  'perspective-dice-four.png',
  'perspective-dice-five.png',
  'perspective-dice-six.png'
);




    public function __construct() {
        $this->DiceImg;
    }


    public function getDice()
    {
        $random = $this->DiceImg[$this->randomNum()];
        return  $this->getRandomDice($random);
    }
}












$rolling = new DiceNormal();
$rolling1 = new DicePerspective();

for ($i=0; $i <= 4; $i++) {
    echo $rolling->getDice();

    echo $rolling1->getDice();
    echo "<br>";
}
