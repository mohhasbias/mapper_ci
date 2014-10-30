<div class="container-fluid" style="margin-bottom: 140px;">
	<?php if(isset($success) && $success): ?>
		<p class="alert alert-success">Successfully added new issue. You will be redirected soon</p>
	<?php else: ?>
		<h2>Add New Issue</h2>
		<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>	
		<?php echo form_open_multipart('issues/create') ?>
			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						<label for="title">Title</label>
						<input class="form-control" type="input" name="title" value="<?php echo $issue['title']; ?>"/>
					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" name="description" rows="5"></textarea>
					</div>

					<div class="form-group">
						<label for="photo">Photo</label>
						<input id="uploadImage" type="file" accept="image/*" capture="camera" name="userfile" onchange="previewImage();"/>
						<div class="img-thumbnail text-center" style="width: 100px; height: 100px">
							<img style="width: auto;height: 100%;" id="uploadPreview">
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div id="map-canvas" style="min-height:50%;"></div>
					<div class="row">
						<div class="form-group col-xs-6">
							<label for="longitude">Longitude</label>
							<input class="form-control" type="input" name="longitude" readonly/>
						</div>

						<div class="form-group col-xs-6">
							<label for="latitude">Latitude</label>
							<input class="form-control" type="input" name="latitude" readonly/>
						</div>
					</div>
				</div>
			</div>
			
			<input class="btn btn-success" type="submit" name="submit" value="Save"/>
		</form> 
	<?php endif; ?>
</div>