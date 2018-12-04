$(document).ready(function(){

	$("#sidebar").mCustomScrollbar({
         theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        $('#content').toggleClass('active');
    });

    $('#submitLogin').click(function(){
    	confirm = true;
    	if($.trim($('#userText').val()).length == 0){
    		swal("Oops...","Por favor ingresa un correo válido","warning");
    		confirm = false;
    	}
    	else if($.trim($('#userPass').val()).length == 0){
    		swal("Oops...","No olvides colocar tu contraseña","warning");
    		confirm = false;
    	}
    	if(confirm)
    		$('#loginForm').submit();
    })

    $('#areaUsuario').change(function(){
        if($('#areaUsuario option:selected').val() > 0){
            $.ajax({
                url: 'obten-cargos',
                type: 'POST',
                data: {area: $('#areaUsuario option:selected').val()},
            }).done(function(data) {
                $('#cargoUsuario').html(data);
                $('#divCargo').show(300);
            }).fail(function() {
                swal("Oops..","Ocurrio un problema de comunicación con el servidor","error")
            })
        }else
            $('#divCargo').hide(300);
    });

    $('#edoUsuario').change(function(){
        if($('#edoUsuario option:selected').val() > 0){
            $.ajax({
                url: 'obten-delegaciones',
                type: 'POST',
                data: {estado: $('#edoUsuario option:selected').val()},
            }).done(function(data) {
                $('#munUsuario').html(data);
                $('#divMun').show(300);
            }).fail(function() {
                swal("Oops","Ocurrio un problema de comunicación con el servidor","error");
            });
        }else{
            $('#divMun').hide(300);
            $('#divCol').hide(300);
            $('#munUsuario').html('');
            $('#colUsuario').html('');
        }
    });

    $('#munUsuario').change(function(){
        if($('#munUsuario option:selected').val() > 0){
            $.ajax({
                url: 'obten-colonias',
                type: 'POST',
                data: {municipio: $('#munUsuario option:selected').val()},
            }).done(function(data) {
                $('#colUsuario').html(data);
                $('#divCol').show(300);
            }).fail(function() {
               swal("Oops","Ocurrio un problema de comunicación con el servidor","error"); 
            })
        }else{
            $('#divCol').hide(300);
            $('#colUsuario').html('');
        }
    });

    $('#btnGuardarUsuario').click(function(){
        isCorrect = true;
        if($.trim($('#nombreUsuario').val()).length == 0){
            swal("Oops..","Debes ingresar el nombre del empleado","warning");
            isCorrect = false;
        }else if($.trim($('#aPUsuario').val()).length == 0){
            swal("Oops..","Debes ingresar el apellido paterno del empleado","warning");
            isCorrect = false;
        }else if($.trim($('#correoUsuario').val()).length == 0){
            swal("Oops..","Debes ingresar el correo que usara el empleado","warning");
            isCorrect = false;
        }else if($('#areaUsuario option:selected').val() == 0){
            swal("Oops..","Debes indicar el área donde se asignara el empleado","warning");
            isCorrect = false;
        }else if($('#cargoUsuario option:selected').val() == 0){
            swal("Oops..","Debes indicar que cargo tendra el empleado","warning");
            isCorrect = false;
        }else if($('#edoUsuario option:selected').val() == 0){
            swal("Oops..","Debes indicar el estado del empleado","warning");
            isCorrect = false;
        }else if($('#munUsuario option:selected').val() == 0){
            swal("Oops..","Debes indicar el municipio/alcaldía del empleado","warning");
            isCorrect = false;
        }else if($('#colUsuario option:selected').val() == 0){
            swal("Oops..","Debes indicar la colonia del empleado","warning");
            isCorrect = false;
        }else if($.trim($('#codPosUsuario').val()).length == 0){
            swal("Oops..","Debes ingresar el código postal del empleado","warning");
            isCorrect = false;
        }else if($.trim($('#calleUsuario').val()).length == 0){
            swal("Oops..","Debes ingresar la calle del empleado","warning");
            isCorrect = false;
        }
        if(isCorrect)
            $('#formNuevoEmpleado').submit();
    });

});

function setFormat(value){
    value = value.toLocaleString('en-US');
}