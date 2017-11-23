<?php /**
 *
 */
class Car
{
        private $color;
        public $brand;
        public $model;
        private $fuel;

  public function __construct( $brand, $model, $fuel)
  {

    $this->brand = $brand;
    $this->model = $model;
    $this->fuel = $fuel;
  }


public function showInfo() {
  return "Dit zijn alle gegevens van uw " . $this->brand . " " . $this->model .  ": " . $this->fuel;
}


public function duurzaam()
{

  switch ($this->fuel) {
    case 'Diesel':
      return false;
      break;
    case 'Benzine':
      return false;
      break;
      case 'Electicity':
        return true;
        break;
  }
}


public function setColor($color) {
     $ok = array('red','green','blue');


  if (in_array($color, $ok)) {
    return "jaa";
  }
  else {
    return "false";
  }

}


}



$fiat = new Car("Fiat", "Panda", "Electicity" );

echo $fiat->showInfo();

echo "<br>";
echo "Is uw auto duurzaam? ";
var_dump($fiat->duurzaam());
echo "<br>";
echo "mag deze kleur? " . $fiat->setColor("red");

 ?>
