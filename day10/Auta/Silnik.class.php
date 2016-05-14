<?PHP
class Silnik{
    // public oznacza mozwisc zmiany tej zmiennej
    //private oznacza ze zmienna okreslona jest TYLKO w klasie oraz nie jest mozliwa jego zmiana poza klasa
    private $typ;
    private $moc;
    public $power;
    
    //Metoa bedaca konstruktorem obiektu
    //Wywoływana jest zawsze przy torzeniu obiektu
    public function __construct($rodzaj,$km){
        $this->typ = $rodzaj;
        $this->moc = $km;
    }
}
?>