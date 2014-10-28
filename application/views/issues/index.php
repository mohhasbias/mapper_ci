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
      <a class="navbar-brand" href="#"><img style="margin: -5px 0px;height: 100%;" src="http://dynamic.mmb.pens.ac.id/templates/dynamic/assets/img/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo addActiveClass('active', '/issues') ?>"><a href="#">Home</a></li>
        <li><a href="#">Member Area</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <div id="map-canvas"></div>
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