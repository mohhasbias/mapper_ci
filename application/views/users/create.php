<div class="container" style="margin-bottom: 140px;">
	<?php if(isset($success) && $success): ?>
		<p class="alert alert-success">Successfully added new user. You will be redirected soon</p>
	<?php else: ?>
		<h2>Add New User</h2>
		<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>	
		<?php $errors = $this->session->flashdata('errors'); ?>
        <?php if($errors): ?>
            <?php foreach($this->session->flashdata('errors') as $error): ?>
                <p class="alert alert-danger"><?php echo $error; ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
		<?php echo form_open('users/create') ?>	
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="email" name="email" value="<?php echo $user['email'];?>"/>
			</div>

			<div class="form-group">
				<label for="name">Full Name</label>
				<input class="form-control" type="input" name="name" value="<?php echo $user['name'];?>">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password"/>
			</div>

			<div class="form-group">
				<label for="confirm_password">Confirm Password</label>
				<input class="form-control" type="password" name="confirm_password"/>
			</div>
	
			<input class="btn btn-success pull-right" type="submit" name="submit" value="Save"/>
		</form> 
	<?php endif; ?>
</div>