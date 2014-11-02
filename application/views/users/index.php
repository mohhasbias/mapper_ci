<div class="container-fluid" style="margin-bottom: 70px;">
	<table class="table table-striped">
		<thead>
			<tr>
				<td><strong>#</strong></td>
				<td><strong>Email</strong></td>
				<td><strong>Full Name</strong></td>
				<td><strong>Role</strong></td>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0; $i < count($users); $i++): ?>
				<tr>
					<td>
						<?php echo ($i+1); ?>
					</td>
					<td>
						<?php echo $users[$i]->email; ?>
					</td>
					<td>
						<?php echo $users[$i]->name; ?>
					</td>
					<td>
						<?php echo $users[$i]->groups; ?>
						<div class="btn-group pull-right">
							<a class="btn btn-default btn-xs" href="#">View</a>
							<a class="btn btn-default btn-xs" href="#">Edit</a>
							<?php if(current_user()->id !== $users[$i]->id): ?>
								<a class="btn btn-default btn-xs" href="#">Delete</a>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endfor; ?>	
		</tbody>
	</table>
	<a href="<?php echo site_url('users/create'); ?>" class="btn btn-success pull-right">Add New User</a>
</div>