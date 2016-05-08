//wszystko w JS jest obiektem
'use strict';
console.log("Dziala");

function welcome() {
    // do zmiennej "imie" przypisuje wartosc dokumentu->forms->id formatki->zmiennej=name->odczytajnie wartosci z tej zmiennej "name"
    var imie = document.forms.formularz.name.value;


    if (imie == "") {
        window.alert("Wpisza imie");
    } else {
        window.alert("Witaj " + imie);
    }
}
