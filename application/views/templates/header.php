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

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('/') ?>"><img style="margin: -5px 0px;height: 100%;" src="http://dynamic.mmb.pens.ac.id/templates/dynamic/assets/img/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text">
        Welcome, <?php echo current_user()->name; ?>
      </p>
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo addActiveClass('active', '/issues/index'); ?>">
          <a href="<?php echo site_url('/issues/index') ?>">Home</a>
        </li>
        <?php if($this->aauth->is_loggedin()): ?>
          <!-- <li class="<?php echo addActiveClass('active', '/users/index'); ?>">
            <a href="<?php echo site_url('users/index'); ?>">Member Area</a>
          </li> -->
          <li class="<?php echo addActiveClass('active', '/dashboard/index'); ?>">
            <a href="<?php echo site_url('dashboard/index'); ?>">Member Area</a>
          </li>
        <?php endif; ?>
        <li><a><!-- separator --></a></li>
        <?php if($this->aauth->is_loggedin()): ?>
          <li><a href="<?php echo site_url('user_session/logout'); ?>">Logout</a></li>
        <?php else: ?>
          <li><a href="<?php echo site_url('user_session/login'); ?>">Login</a></li>
        <?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>