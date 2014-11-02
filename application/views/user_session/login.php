<html>
<head>
<title><?php echo $title ?> - Issue Mapper</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/user_session/login.css')?>">

</head>
<body>
<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                    <h1 class="text-primary">Log in with your email account</h1>
                    <?php $errors = $this->session->flashdata('errors'); ?>
                    <?php if($errors): ?>
                        <?php foreach($this->session->flashdata('errors') as $error): ?>
                            <p class="alert alert-danger"><?php echo $error; ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php echo form_open('user_session/login'); ?>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-success btn-lg btn-block" value="Log in">
                    </form>
                    
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>Page © - 2014</p>
                <p>Powered by <strong><a href="http://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a></strong></p>
            </div>
        </div>
    </div>
</footer>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>