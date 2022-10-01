<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();

$appl = new Fruit();
$banan = new Fruit();

$apple->set_name('Apple');
$banana->set_name('Banana');

$appl->set_name('Apple');
$banan->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $appl->get_name();
echo "<br>";
echo $banan->get_name();
?>
 
</body>
</html>