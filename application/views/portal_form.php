<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.css" />

        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <title>Portal</title>
        <link rel="icon" href="<?= base_url() ?>assets/img/logo.png" />
    </head>
    <body>
	<div class="col-md-4 col-md-offset-4" style="margin-top:3%";>
            <div class="panel panel-primary panel-login">
		<div class="panel-heading" style="text-align:center";>                    
                <h2><img src="<?= base_url() ?>assets/img/logo.png" style="width: 60px; height: 60px; margin-top: -10px;"> Monggo Login</h2>
		</div>
                    <div class="panel-body">
			<form class="form" method="post" action="<?= site_url('portal/validasi')?>">
                            <input type="hidden" name="word" value="<?= $cap['word'] ?>" />
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Your Password" required=""/>
                            </div>
                            <div class="form-group">
                                <label>Captcha</label><br />
                                <label><?= $cap['image']?></label>
                                <input type="text" name="captcha" class="form-control" placeholder="Insert Captcha" required=""/>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <br />
                            <br />
<!--                                <div class="alert alert-danger" role="alert">
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <span class="sr-only">Error:</span>
                                    <?= $this->session->flashdata('error') ?>
                                 </div>-->
<!--                                <div>
                                    <p class="bg-danger"><?= $this->session->flashdata('error') ?></p>
                                </div>-->
                            <div class="text-danger">
                                <?= $this->session->flashdata('error') ?>
                            </div>
                        </form>
                    </div>
			<div class="panel-footer" style="text-align:center";>
				Copyright &copy 2017. SIAKAD NEWBIE :)
			</div>
		</div>
	</div>
    </body>
</html>