<div class="container-fluid" style="margin-bottom: 140px">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<?php if($this->aauth->is_admin()): ?>
	  	<li role="presentation"><a href="#users-list" role="tab" data-toggle="tab">User List</a></li>
	  <?php endif; ?>
	  <?php if($this->aauth->is_admin()): ?>
	  	<li role="presentation"><a href="#roles" role="tab" data-toggle="tab">Roles</a></li>
	  <?php endif; ?>
	  <li role="presentation" class="active"><a href="#team-list" role="tab" data-toggle="tab">Team List</a></li>
	  <li role="presentation"><a href="#categories" role="tab" data-toggle="tab">Categories of Issue</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<?php if($this->aauth->is_admin()): ?>
		  <div role="tabpanel" class="tab-pane" id="users-list">
		  	<?php echo $this->load->view('users/index'); ?>
		  </div>
		<?php endif; ?>
		<?php if($this->aauth->is_admin()): ?>
		  <div role="tabpanel" class="tab-pane" id="roles">
		  	<?php echo $this->load->view('roles/index'); ?>
		  </div>
	  <?php endif; ?>
	  <div role="tabpanel" class="tab-pane active" id="team-list">
	  	<?php echo $this->load->view('teams/index'); ?>
	  </div>
	  <div role="tabpanel" class="tab-pane" id="categories">Categories</div>
	</div>
</div>