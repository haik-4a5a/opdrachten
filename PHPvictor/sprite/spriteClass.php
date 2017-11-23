<?php
/**
 * character Mario
 */
class Mario
{
  protected $name = " ";

  function __construct()
  {
    $this->name;
  }


public function getCharacterClass()
{
  return $this->name;
}


public function Getspan() {
  return "<span class='mario-sprite {$this->name}'></span>";
}



public function __toString(){
return Getspan();

}


public function walk() {
  echo "walking";
}



public function __destruct(){
return "doei";

}

}




/**
 * class luigi
 */
class MarioExtend extends Mario
{


public function setMario($naam){
  $this->name = $naam;
}

public function jump()
{
  echo "jumping";
}

}


/**
 * wario(zwim)
 */
class Luigi extends Mario
{

  public function setMario($naam){
    $this->name = $naam;
  }

  public function swim(){
echo "swimming";

  }
}


$mario = new MarioExtend();


$mario->jump();
$mario->walk();
$mario->setMario('mario-hammer');
echo $mario->Getspan();

$luigi = new Luigi();
$luigi->swim();




// /

// $marioThink = new Mario('mario-think');
// echo $marioThink->getCharacterClass();
// echo $marioThink->Getspan();
//
//
// $marioJump = new Mario('mario-jump');
//
// echo $marioJump->Getspan();
//
//
// $marioStand = new Mario('mario-stand');
//
// echo $marioStand->Getspan();
//
//
// $marioHammer = new Mario('mario-hammer');
//
// echo $marioHammer->Getspan();




 ?>
