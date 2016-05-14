<?PHP
//Klasa składa sie"
//- zmienne - rzeczowniki
//- metody - czasowniki
class Dystrybutor {
    public $waga;
    public $banik;
    public $zasilanie;
    public $stanWody;
    
    public function lejWode(){
        
$this->stanWody = $this->stanWody - 0.5;
echo "Nalewam wode";
        echo "<br />";
        return 0.5;
    }
    
    public function podgrzejWode(){
        
    }
    
    public function koniecWody(){
        
    }
}
?>