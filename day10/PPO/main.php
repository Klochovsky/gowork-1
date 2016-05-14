<?PHP
require_once('Dystrybutor.class.php');
require_once('Kubeczek.class.php');
//storzenie nowego obiektu Dystrybutor i przypisanie go do zmiennej "dystrybutor1"
$dystrybutor1 = new Dystrybutor();
//przypisanie zmiennych składowych
$dystrybutor1->waga = 50;
$dystrybutor1->baniak = TRUE;
$dystrybutor1->zasilanie = TRUE;
$dystrybutor1->stanWody = 100;

$mojKubeczek = new Kubeczek();
$mojKubeczek->pojemnosc = 0;
$mojKubeczek->zawartosc = "brak";

echo "Stan wody: ".$dystrybutor1->stanWody;
echo "<br />";
//napelniamy kubeczek
$mojKubeczek->pojemnosc = $dystrybutor1->lejWode();
echo "Stan wody: ".$dystrybutor1->stanWody;
echo "<br />";
echo "Stan wody w kubeczku: ".$mojKubeczek->pojemnosc;

?>