<div class="container-fluid" style="margin-bottom: 140px">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
	  <li role="presentation" class="active"><a href="#users-list" role="tab" data-toggle="tab">User List</a></li>
	  <li role="presentation"><a href="#roles" role="tab" data-toggle="tab">Roles</a></li>
	  <li role="presentation"><a href="#team-list" role="tab" data-toggle="tab">Team List</a></li>
	  <li role="presentation"><a href="#categories" role="tab" data-toggle="tab">Categories of Issue</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
	  <div role="tabpanel" class="tab-pane active" id="users-list">
	  	<?php echo $this->load->view('users/index'); ?>
	  </div>
	  <div role="tabpanel" class="tab-pane" id="roles">
	  	<?php echo $this->load->view('roles/index'); ?>
	  </div>
	  <div role="tabpanel" class="tab-pane" id="team-list">Team List</div>
	  <div role="tabpanel" class="tab-pane" id="categories">Categories</div>
	</div>
</div>