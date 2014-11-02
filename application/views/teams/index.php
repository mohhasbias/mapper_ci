<div class="container-fluid" style="margin-bottom: 140px">
<h2>Team List</h2>
<table class="table table-striped">
		<thead>
			<tr>
				<td><strong>#</strong></td>
				<td><strong>Team Name</strong></td>
				<td><strong>Team Members</strong></td>
				<td><strong>Role</strong></td>
			</tr>
		</thead>
		<tbody>
			<?php $num_teams = 5; ?>
			<?php for($i=0; $i < $num_teams; $i++): ?>
				<?php $num_members = 3; ?>	
				<tr>
					<td>
						<?php echo ($i+1); ?>
					</td>
					<td>
						Team <?php echo ($i+1); ?>
						<div class="btn-group pull-right">
							<a class="btn btn-default btn-xs" href="#">View</a>
							<a class="btn btn-default btn-xs" href="#">Edit</a>
							<a class="btn btn-default btn-xs" href="#">Delete</a>
						</div>
					</td>
					<td>
						Members 1
					</td>
					<td>
						Lead
					</td>
				</tr>
				<?php for($j=0; $j < $num_members-1; $j++): ?>
					<tr>
						<td></td>
						<td></td>
						<td>
							Members <?php echo ($j+2); ?>
						</td>
						<td>
							Member
						</td>
					</tr>
				<?php endfor; ?>
				<tr>
					<td></td>
					<td></td>
					<td><a href="#" class="btn btn-success pull-left btn-xs">Add Member</a></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			<?php endfor; ?>	
		</tbody>
	</table>
	<a href="#" class="btn btn-success pull-right">Add New Team</a>
</div>
