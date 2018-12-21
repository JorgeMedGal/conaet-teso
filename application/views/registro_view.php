<?php $this->load->view('header'); ?>
<html lang="MX">
<style type="text/css">
	body{
		align: center;
	}
    #resultado {
        background-color: red;
        color: white;
        font-weight: bold;
    }
    #resultado.ok {
        background-color: green;
    }
  }
</style>
  <body>

    <div class="col-2" id="divLogo">
      <img id="logoBarmex" src="<?=base_url();?>content/themes/erp-cloud/images/logoBar.png" class="img-fluid rounded">
    </div>
    <form class="registro" action="#" method="post">

 <h1>Registro</h1>

 Nombre:
 <input type="text" name="nombre" size="50" maxlength="25" placeholder="Ingrese su Nombre" required/>
 <p>
  Primer Apellido:
  <input type="text" name="primer_apellido" size="50" maxlength="15" placeholder="Ingrese su Primer Apellido" required>
  <p>
  Segundo Apellido:
  <input type="text" name="segundo_apellido" size="50" maxlength="15" placeholder="Ingrese su Segundo Apellido" required>
  <p>
  Correo:
 <input type="email" name="email" size="50" maxlength="50" placeholder="Ingrese su Correo" required/>
 <p>
Contraseña:
   <input type="password" placeholder="Contraseña" id="password" required>
	<p>
Razón Social:
  <input type="text" size="50" placeholder="Escriba la Razón Social a la que pertenece" required>
  <p>

<!-- VALIDACION DEL RFC-->
<script type="text/javascript">
function rfcValido(rfc, aceptarGenerico = true) {
    const re       = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    var   validado = rfc.match(re);

    if (!validado)  //Coincide con el formato general del regex?
        return false;

    //Separar el dígito verificador del resto del RFC
    const digitoVerificador = validado.pop(),
          rfcSinDigito      = validado.slice(1).join(''),
          len               = rfcSinDigito.length,

    //Obtener el digito esperado
          diccionario       = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
          indice            = len + 1;
    var   suma,
          digitoEsperado;

    if (len == 12) suma = 0
    else suma = 481; //Ajuste para persona moral

    for(var i=0; i<len; i++)
        suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
    digitoEsperado = 11 - suma % 11;
    if (digitoEsperado == 11) digitoEsperado = 0;
    else if (digitoEsperado == 10) digitoEsperado = "A";

    if ((digitoVerificador != digitoEsperado)
     && (!aceptarGenerico || rfcSinDigito + digitoVerificador != "XAXX010101000"))
        return false;
    else if (!aceptarGenerico && rfcSinDigito + digitoVerificador == "XEXX010101000")
        return false;
    return rfcSinDigito + digitoVerificador;
}
function validarInput(input) {
    var rfc         = input.value.trim().toUpperCase(),
        resultado   = document.getElementById("resultado"),
        valido;

    var rfcCorrecto = rfcValido(rfc);   // ⬅️ Acá se comprueba

    if (rfcCorrecto) {
    	valido = "Válido";
      resultado.classList.add("ok");
    } else {
    	valido = "No válido"
    	resultado.classList.remove("ok");
    }

    resultado.innerText = "RFC: " + rfc
                        + "\nResultado: " + rfcCorrecto
                        + "\nFormato: " + valido;
}

</script>

    <label>RFC:</label>
   <input type="text" id="rfc_input" oninput="validarInput(this)" maxlength="13" placeholder="Ingrese su RFC" required>
   <pre id="resultado"></pre>
   <!--VALIDACION DEL RFC-->
<p>
 <button type="submit" name="submit">Registrar</button>
 <button  name="button">Ingresar</button>
    </form>
  </body>
</html>
<?php $this->load->view('footer'); ?>
