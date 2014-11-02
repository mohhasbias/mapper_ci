<div class="container-fluid">
  <div class="row">
    <div class="col-xs-6">
      <div id="map-canvas"></div>
    </div>
    <div class="col-xs-6" style="height: 100%;padding-bottom: 45px;">
      <h2 style="margin-top: 0;">
        List of Issues 
        <?php if($this->aauth->is_loggedin()): ?>
          <a class="btn btn-success pull-right" href="<?php echo site_url('issues/create'); ?>">Add New Issue</a>
        <?php endif; ?>
      </h2>
      <div style="height: 100%;overflow-y:auto;overflow-x:hidden;">
        <?php if(empty($issues)): ?>
          <p class="lead text-muted text-center"><em>-- No Issue Yet --</em></p>
        <?php endif; ?>
        <?php foreach($issues as $issue): ?>
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-xs-4">
              <img src="<?php echo $issue['photo']; ?>" alt="<?php echo $issue['title']?>" class="img-thumbnail">
            </div>
            <div class="col-xs-8">
              <div class="row">
                <div class="col-xs-12">
                  <h3 class="pull-left" style="margin-top: 0;margin-bottom:0;">
                    <img style="height: 23px;margin-top: -5px;margin-bottom: 0;" src="http://dynamic.mmb.pens.ac.id/templates/dynamic/assets/img/iconMerah.png">
                    <?php echo $issue['title']; ?> 
                  </h3>
                  <?php if($this->aauth->is_loggedin()): ?>
                    <div class="btn-group pull-right">
                      <a class="btn btn-default btn-xs" href="#">View</a>
                      <a class="btn btn-default btn-xs" href="#">Edit</a>
                      <a class="btn btn-default btn-xs" data-delete href="<?php echo site_url('issues/delete/' . $issue['id']) ?>">Delete</a>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <p><small class="text-muted"><?php echo $issue['timestamp'] ?> | Status: <?php echo $issue['status'] ?></small></p>
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
