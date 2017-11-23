<?php /**
 *
 */
class Person {
public $name;
private $age = null;


  function __construct($name)
  {
    $this->name = $name;
  }



  public function showInfo() {
    return "zijn/haar naam is " . $this->name;
  }



public function setAge($age)
{
  if (is_int($age) && $age >= 0 && $age < 150) {
    $this->age = $age;
  }
}



public function getAge()
{
  if ($this->age == null) {
    return "je hebt geen leeftijd?";
  } else{
  return $this->age;
  }
}



public function agePlus()
{
  if ($this->age > 18) {
    return true;
  } else {
    return false;
  }
}

}





// $hrant = new Person("hrant");
//
// echo $hrant->showInfo();
//
// echo $hrant->setAge(75);
//
// echo "je bent " . $hrant->getAge() . " dus " .
//
// var_dump($hrant->agePlus());


// $sharon = new Person("Sharon");
//
//
//
//
// echo $sharon->showInfo();













$hrant = new Person("Hrant");

echo $hrant->showInfo();

$hrant->setAge(75);
echo "<br>";

var_dump($hrant->agePlus());









 ?>
