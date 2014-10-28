<nav class="navbar navbar-default" role="navigation">
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
        Hi, User
      </p>
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo addActiveClass('active', '/issues/index') ?>">
          <a href="<?php echo site_url('/issues/index') ?>">Home</a>
        </li>
        <li><a href="#">Member Area</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <div class="row">
    <div class="col-xs-6">
      <div id="map-canvas"></div>
    </div>
    <div class="col-xs-6" style="height: 100%;padding-bottom: 45px;">
      <h2 style="margin-top: 0;">List of Issues <a class="btn btn-success pull-right" href="">Add New Issue</a></h2>
      <div style="height: 100%;overflow-y:scroll;overflow-x:hidden;">
        <?php foreach($issues as $issue): ?>
          <div class="row" style="margin-bottom: 10px;margin-right: 5px;">
            <div class="col-xs-4">
              <img src="<?php echo $issue['photo'] ?>" alt="<?php echo $issue['title']?>" class="img-thumbnail">
            </div>
            <div class="col-xs-8">
              <h3 style="margin-top: 0">
                <img style="height: 23px;margin-top: -5px;margin-bottom: 0" src="http://dynamic.mmb.pens.ac.id/templates/dynamic/assets/img/iconMerah.png">
                <?php echo $issue['title']; ?> 
                <div class="btn-group pull-right">
                  <a class="btn btn-default btn-xs" href="#">View</a>
                  <a class="btn btn-default btn-xs" href="#">Edit</a>
                  <a class="btn btn-default btn-xs" href="#">Delete</a>
                </div>
                <br>
                <small><?php echo $issue['timestamp'] ?> | Status: <?php echo $issue['status'] ?></small>

              </h3>
              <p class="lead">
                <?php echo $issue['description'] ?>
              </p>  
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>  

</div>

<nav class="navbar navbar-default navbar-fixed-bottom navbar-inverse" role="navigation">
  <div class="container">
    <div class="text-center">
      <p class="navbar-text navbar-right">&copy; 2014 MMB</p>
    </div>
  </div>
</nav>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_r0PCbmCb9jhB-6Nr8WBhae6QelSUYCE"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js') ?>"></script>