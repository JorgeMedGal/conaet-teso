<?php $this->load->view('header')?>

<script type="text/javascript">
    <?php
      if($this->session->userdata('noLogin')){
        ?>
          swal("Error","Usuario/contraseña incorrectos o usuario dado de baja","error");
        <?php
        $this->session->unset_userdata('noLogin');
      }
    ?>
  </script>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-2" id="divLogo">
        <img id="logoBarmex" src="<?=base_url();?>content/themes/erp-cloud/images/logoBar.png" class="img-fluid rounded">
      </div>
    </div>
    <div class="row justify-content-center" align="center" id="loginContainer">
      <div class="col-lg-6 col-md-8 col-sm-12">
        <form action="<?=base_url()?>iniciar-sesion" method="POST" id="loginForm">
          <div class="form-group row" align="right">
            <label class="col-sm-4 col-form-label col-form-label-sm rigthPad" for="userText">Correo electrónico: </label>
            <div class="col-sm-8">
              <input type="email" class="form-control form-control-sm" id="userText" name="userName" placeholder="Ingresa tu correo" autocomplete="off">
            </div>
          </div>
          <div class="form-group row" align="right">
            <label class="col-sm-4 col-form-label col-form-label-sm rigthPad" for="userPass">Contraseña: </label>
            <div class="col-sm-8">
              <input type="password" class="form-control form-control-sm" id="userPass" name="password" placeholder="Contraseña">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <button type="button" id="submitLogin" class="btn login">Iniciar sesi&oacute;n</button>
            </div>
          </div>
        </form>
      </div>
    </div> 
  </div>

<?php $this->load->view('footer')?>
