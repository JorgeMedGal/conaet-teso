<!DOCTYPE html>
<html lang=MX>
  <head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?=base_url();?>content/themes/erp-cloud/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=base_url();?>content/themes/erp-cloud/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url();?>content/themes/erp-cloud/css/style-erp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?=base_url();?>/content/themes/erp-cloud/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?=base_url();?>/content/themes/erp-cloud/js/erp-cloud.js"></script>
    <script src="<?=base_url();?>/content/themes/erp-cloud/js/functions_web.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="<?=base_url();?>content/themes/erp-cloud/css/select2.css" rel="stylesheet" />
    <script src="<?=base_url();?>/content/themes/erp-cloud/js/select2.js"></script>
    <script src="<?=base_url();?>/content/themes/erp-cloud/js/bootstrap-fileselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <title>AudiTes</title>
    <link rel="icon" type="image/png" href="<?=base_url()?>content/themes/erp-cloud/images/iconBar.png" />
  </head>
  <body>
    <div class="wrapper">
      <?php if($this->session->userdata('claveEmpleado') > 0) : ?>
      <nav id="sidebar">
        <div class="sidebar-header" align="center">
          <img id="logoBarmex2" src="<?=base_url();?>content/themes/erp-cloud/images/<?=$this->session->userdata('imagenEmpleado')?>" class="img-fluid rounded">
          <h4><?=$this->session->userdata('nombreEmpleado')?></h4>
        </div>
        <ul class="list-unstyled components">
          <p>AudiTes</p>
          <li>
            <a href="<?=base_url()?>">Inicio</a>
          </li>
          <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle <?php if(strpos(current_url(),"ventas") > 0) echo "active";?>">Empleados</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a class="dropdown-item option <?php if(strpos(current_url(),"visitas") > 0) echo "active";?>" href="<?=base_url()?>registrar-empleado">Registrar Empleado</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?=base_url();?>cerrar-sesion"><i class="fas fa-power-off"></i>  Cerrar Sesi&oacute;n</a>
          </li>
        </ul>
      </nav>
      <?php endif; ?>
      <div <?=$this->session->userdata('claveEmpleado') > 0 ? "id='content'": "class='container active'";?>>
        <?php if($this->session->userdata('claveEmpleado') > 0):?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn info">
            <i class="fas fa-align-left"></i>
            <span>Menu</span>
            </button>
          </div>
        </nav>
        <?php endif;?>