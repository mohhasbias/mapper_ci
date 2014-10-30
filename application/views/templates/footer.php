<nav class="navbar navbar-default navbar-fixed-bottom navbar-inverse" role="navigation">
  <div class="container">
    <div class="text-center">
      <p class="navbar-text navbar-right">&copy; 2014 MMB</p>
    </div>
  </div>
</nav>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_r0PCbmCb9jhB-6Nr8WBhae6QelSUYCE"></script>
<script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/geolocationmarker/src/geolocationmarker-compiled.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js') ?>"></script>
<?php 
	$uri_segment = $this->router->fetch_class() . '/' . $this->router->fetch_method();
	$methodjs = 'assets/js/' . $uri_segment . '.js';
	if(file_exists($methodjs))
	{
		echo "<script type='text/javascript' src='/{$methodjs}'></script>";
	} 
?>

</body>
</html>