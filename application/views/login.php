<?php $this->load->view('header')?>
<!--<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link href="C:/Users/Elba/node_modules/sweetalert2/dist/sweetalert2.css" rel="stylesheet"/>-->
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">-->
<!--<script src="C:/Users/Elba/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<link rel=StyleSheet href="<?=base_url();?>/plantilla/css/estilosLog.css" title ="Contemporaneo">
<script type="text/javascript" src="<?=base_url();?>/plantilla/js/ScriptsLogin.js"></script>

<title>Login CONAET</title>

</head>

<body>-->
<div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<form>
  <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Log In</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p>Ingresa Usuario y Contraseña</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">

      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="@Usuario" required>

      <br>

           <!--   Password -->

      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Contraseña" id="pwd"  name="password" required>

<!--      mostrar password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>

      <br>
<!--      button LogIn -->
      <button  onclick="correcto()" type="button" class="w3-button w3-blue"  > Entrar </button>
   </div>



<!--   End Conrainer  -->
  </div>

</form>
</div>
<?php $this->load->view('footer')?>
