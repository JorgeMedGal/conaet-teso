<?php $this->load->view('header'); ?>

<div class="container">
    <form action="<?=base_url()?>registra-empleado" method="post" id="formEmpleado">
    	<div class="row justify-content-center">
      		<div class="col-2" id="divLogo">
        		<img id="logoBarmex" src="<?=base_url();?>content/themes/erp-cloud/images/user_default.png" class="img-fluid rounded">
      		</div>
    	</div>
    </form>
</div>

<?php $this->load->view('footer'); ?>