<div class="container-fluid">
  <div class="row">
    <div class="col-xs-6">
      <div id="map-canvas"></div>
    </div>
    <div class="col-xs-6" style="height: 100%;padding-bottom: 45px;">
      <h2 style="margin-top: 0;">List of Issues <a class="btn btn-success pull-right" href="<?php echo site_url('issues/create'); ?>">Add New Issue</a></h2>
      <div style="height: 100%;overflow-y:auto;overflow-x:hidden;">
        <?php if(empty($issues)): ?>
          <p class="lead text-muted text-center"><em>-- No Issue Yet --</em></p>
        <?php endif; ?>
        <?php foreach($issues as $issue): ?>
          <div class="row" style="margin-bottom: 10px;">
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
