<?PHP
    //funkcja służy do sprawdzenia konfiguracji php
   // phpinfo();
//inicjacja połaczenia z bazą danych (mysql)

//adres serwera np localhost lub 127.0.0.1
//$baza=new mysqli('adres_serwera_bazy_danych_ip/domena','login_bazy_danych','haslo_bazy_danych','nazwa_bazy_danych');

function connectDB(){
    //połączenie z bazą
$baza = new mysqli('localhost','root','','baza_pawel');
   //sprawdzanie tego połączenia
    //składowa (connect_errnoprzyjmuje):
    //true - błąd połączenia z bazą
    //false - nie bledu , udalo sie polaczyc
    if($baza->connect_errno){
        echo "Numer błędu: ".$baza->connect_errno;
        return false;
    }else{
        return $baza;
        //return true;
    }
}

function showComments($db){
    //zapytanie SQL zapisane jako zmienna tekstowa(string)
    $sqlQuery = 'SELECT * FROM comments';
    //$db->query to metoda która zwraca wyniki zapytania przekazanego jako argument tej metody
    $rezultat = $db->query($sqlQuery);
    // rezultat = jakis wynik -> TRUE - jezeli zaptanie sie udalo/poprawne
    // resultat = FALSE - bledne zapytanie SQL
    if($rezultat){
        echo "Liczba komentarzy: ".$rezultat->num_rows;
        echo "<br>";


        echo "<table border=\"1\">
  <tr>
    <th>Id</th>
    <th>Komentarz</th>
    <th>Data</th>
  </tr>";
        while($wiersz = $rezultat->fetch_object()){
            echo "<tr>";
            echo "<td>";
            echo $wiersz->id;
            echo "</td>";
            echo "<td>";
            echo $wiersz->comment;
            echo "</td>";
            echo "<td>";
            echo $wiersz->createdate;
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";



    }else{
        echo "Bledne zapytanie SQL :".$sqlQuery;
    }


}//koniec metody

//fukcja potrzebuje do zmiany kometarza informacji o id komatarza, samym tekscie - komentarzu, i baza danych
function changeComment($id,$comment,$db){
     $sqlQuery = 'UPDATE comments SET comment="'.$comment.'" WHERE comments.id = '.$id;
    $rezultat = $db->query($sqlQuery);

    if($rezultat){
        echo "Udało sie zaktualizować :";
        echo "<br/>";
        echo "Liczba wierszy".$db->affected_rows;
    }else{
        echo "Bledne zapytanie SQL : ".$sqlQuery;
    }
}
function addComment($comment,$db){

    // " -> \"
    // ' -> \'
    // echo "Tekst"
    // 2016-05-19 16:23:01
    $aktualnaData = date('Y-m-d H:i:s');
    $sqlQuery = "INSERT INTO comments (comment, createdate) VALUES ('".$comment."','".$aktualnaData."')";

    $rezultat = $db->query($sqlQuery);

    if($rezultat){
        echo "Komentarz został dodany";
        echo "<br />";

    }else{
        echo "Bledne zapytanie SQL : ".$sqlQuery;
    }
}
//Czesc głowna programu
$mojaBaza = connectDB();
//funkcja zbudowana w mysqli - sluzy do zamkniecie polaczenia
//wywolanie metody wraz z przekazanych do niej obiektem - baza danych
addComment("Nowy super hiper kometarz",$mojaBaza);
showComments($mojaBaza);
//changeComment(3,"nowy trzeci komentarz",$mojaBaza);
$mojaBaza->close();

?>
