function validateNumbers(e){
	tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8)return true;
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function filterFloat(evt,input){
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        return filter(tempValue);
    }else{
        if(key == 8 || key == 13 || key == 0)
            return true;              
        else if(key == 46)
            return filter(tempValue);
        else
              return false;
    }
}

/*function filter(valueInput){
	patron =/^([0-9]+\.?[0-9]{0,2})$/;
    return patron.test(valueInput);
}*/

function toUpperCase(input){
    input.value = input.value.toUpperCase();
}

function showModal(visita,input){
    $('#cuerpoTabla').html('');
    $(input).attr("disabled",true);
    $.ajax({
        url: 'busca-visita',
        type: 'POST',
        data: {numVisita: visita},
    }).done(function(data) {
        $('#modalDetalles').modal('show');
        $('#cuerpoTabla').append(data);//Se añaden las columnas a la tabla
        $(input).attr("disabled",false);
    });
} 

function loadTableRows(cvus,lim){
    $('#cuerpoTablaGeneral').html('');
    $.ajax({
        url: 'ventas/visita/',
        type: 'POST',
    }).done(function(data) {
        $('#cuerpoTablaGeneral').append(data);
    }).fail(function() {
        swal("Oops..","Ocurrio un problema al obtener las visitas del usuario","error");
    });
    
}