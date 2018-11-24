
function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

    document.getElementById("eye").addEventListener("click", function(){
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);



//funcion para logear
    function correcto(){
        var password1 = document.getElementById('pwd').value;
        var usuario1 = document.getElementById('txt-input').value;

        if(password1 == 123 && usuario1=="jonathan.alvarado@softtek.com"){
            swal ( "Bien" ,  "Acceso correcto!" ,  "success" );
            console.log("si entro");
        }else{
            swal ( "Lo Sentimos" ,  "Contraseña ó Usuario incorecto!" ,  "error" );
            console.log("no entro" + " " + password1 + " " + usuario1 );
        }
    }
