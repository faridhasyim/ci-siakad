<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link rel="icon" href="<?= base_url() ?>assets/img/logo.png" />
    </head>
    <body>
	<div class="col-md-6 col-md-offset-3" style="margin-top:5%";>
            <div class="panel panel-primary panel-login">
		<div class="panel-heading" style="text-align:center";>                    
                <h2><img src="<?= base_url() ?>assets/img/logo.png" style="width: 60px; height: 60px; margin-top: -10px;"> Monggo Login</h2>
		</div>
                    <div class="panel-body">
			<?php
                    	echo $this->form_builder->open_form(array(
                        	'action' => 'login/validasi'
				));
			echo $this->form_builder->build_form_horizontal(array(
				array(
					'id' => 'username',
					'required' => ''
				),
				array(
					'id' => 'password',
					'type' => 'password',
					'required' => ''
				),
				array(
					'id' => '',
					'type' => 'submit',
					'label' => 'Masuk'
				)
				));
			echo $this->form_builder->close_form();
			?>
                    </div>
			<div class="panel-footer" style="text-align:center";>
				Copyright &copy 2016. SIAKAD NEWBIE :)
			</div>
		</div>
	</div>
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/css/bootstrap.css" />
		<script type="text/javascript" src="<?= base_url()?>assets/js/jquery-1.12.3.js"></script>
		<script type="text/javascript" src="<?= base_url()?>assets/js/bootstrap.js"></script>
    </body>
</html>