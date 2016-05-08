'use strict';

function check() {
    //zmienna "formularz" odpowiada na wyslanie formularza (submit)
    var formularz = document.forms['formularz'];

    var login = document.forms.formularz.login.value;
    var pass = document.forms.formularz.pass.value;

    var komunikatLogin = document.getElementById('errorlogin');
    var komunikatPass = document.getElementById('errorpass');

    var blad = false;











    if((login == "") && (pass == "")){
        komunikatLogin.innerHTML = "Nie podałeś loginu !";
        komunikatPass.innerHTML = "Nie podałeś hasła !";
         blad = true;
    }else if (login == "") {
        komunikatLogin.innerHTML = "Nie podałeś loginu !";
        komunikatPass.innerHTML = "";
        blad = true;
    }else if (pass == "") {
        komunikatPass.innerHTML = "Nie podałeś hasła !";
        komunikatLogin.innerHTML = "";
        blad = true;
    }

    if (blad) {
        // sa bledy blad = TRUE
    }else{
        //submit wysyla dane
         formularz.submit();
    }

}
