<div class="container-fluid" style="margin-bottom: 70px;">
	<table class="table table-striped">
		<thead>
			<tr>
				<td><strong>#</strong></td>
				<td><strong>Role Name</strong></td>
				<td><strong>Privilege</strong></td>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0; $i < count($roles); $i++): ?>
				<tr>
					<td>
						<?php echo ($i+1); ?>
					</td>
					<td>
						<?php echo $roles[$i]->name; ?>
					</td>
					<td>
						<?php print_r($roles[$i]->privileges); ?>
						<div class="btn-group pull-right">
							<a class="btn btn-default btn-xs" href="#">View</a>
							<a class="btn btn-default btn-xs" href="#">Edit</a>
							<a class="btn btn-default btn-xs" href="#">Delete</a>	
						</div>
					</td>
				</tr>
			<?php endfor; ?>	
		</tbody>
	</table>
	<a href="#" class="btn btn-success pull-right">Add New Role</a>
</div>