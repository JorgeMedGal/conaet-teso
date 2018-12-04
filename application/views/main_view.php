<?php $this->load->view('header')?>
<section class="container" id=dashboard>
	<!--Cards Main menu-->
	<div class="row justify-content-center">
		<div class="card-group shadow-sm p-2 mb-5 bg-white rounded">
			<div class="card">
	  			<img class="card-img-top img-fluid" src="content/themes/erp-cloud/images/nuevo-cliente.jpg" alt="Card image cap">
	  			<div class="card-body">
	    			<h6 class="card-title">Ultimos clientes registrados</h6>
	    			<p class="card-text">Revisa que clientes se han registrado recientemente</p>
	    			<button class="btn login">Ir Ahora</button>
	  			</div>
			</div>
			<div class="card card">
	  			<img class="card-img-top img-fluid" src="content/themes/erp-cloud/images/auditoria-curso.jpg" alt="Card image cap">
	  			<div class="card-body">
	    			<h6 class="card-title">Auditorias en curso</h6>
	    			<p class="card-text">Revisa las auditorias en curso</p>
	    			<button class="btn login">Ir Ahora</button>
	  			</div>
			</div>
			<div class="card">
	  			<img class="card-img-top img-fluid" src="content/themes/erp-cloud/images/completadasAud.jpg" alt="Card image cap">
	  			<div class="card-body">
	    			<h6 class="card-title">Auditorias finalizadas</h6>
	    			<p class="card-text">Revisa las auditorias finalizadas</p>
	    			<button class="btn login">Ir Ahora</button>
	  			</div>
			</div>
		</div>
	</div>
	<!--panel chart-->
	<div class="row justify-content-center shadow-sm p-2 mb-5 bg-white rounded">
		<canvas id="chartDiv"></canvas>
	</div>
</section>
<script type="text/javascript">
	var myChart = new Chart($('#chartDiv'), {
        type: 'bar',
        data: {
            labels: ["Agosto", "Septiembre", "octubre", "Noviembre", "Diciembre"],
            datasets: [{
                label: '# de auditorias al mes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                	'rgba(255, 99, 132, 0.2)',
                	'rgba(54, 162, 235, 0.2)',
                	'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]},
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>

<?php $this->load->view('footer')?>
