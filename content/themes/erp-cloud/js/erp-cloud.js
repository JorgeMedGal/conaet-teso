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
});

function setFormat(value){
    value = value.toLocaleString('en-US');
}