<?PHP
require_once('Kolo.class.php');
require_once('Silnik.class.php');
require_once('Auta.class.php');



$silnik = new Silnik("Disel",120);
$silnik_elektryczny = new Silnik("Elektryczny",100);

$mojeAuto = new Auta($silnik);
echo $mojeAuto->getPrzebieg();
echo "<br />";
$mojeAuto->setJedz(244);
$mojeAuto->setJedz(1044);
$mojeAuto->setJedz(544);
echo $mojeAuto->getPrzebieg();

echo "<br />";
?>