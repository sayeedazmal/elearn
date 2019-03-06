<?php
	
?>
<div class="content-wrapper">
	<div class="container mt-3">
		<?php echo form_open_multipart();?>

			<input type="hidden" name="user" value="<?php echo $user_id; ?>">
			<div class="input-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="input-group">
				<label>Type</label>
				<select type="text" name="resouce_type" class="form-control">
					<option>Video</option>
					<option>PDF</option>
				</select>
			</div>
			<div class="input-group">
				<label>Select Course</label>
				<select type="text" name="course" class="form-control">
					<?php 
					foreach ($courses as $keyCourse => $valueCourse) {
						?>
						<option value="<?php echo $valueCourse->CourseID; ?>"><?php echo $valueCourse->CourseName; ?></option>
						<?php
					}
					?>
				</select>
				
			</div>
			<div class="input-group">
				<label>Date</label>
				<input type="text" name="date" class="form-control">
			</div>
			<div class="input-group">
				<label>Thumbnail</label>
				<input type="file" name="thumbnail" class="form-control">
			</div>
			<div class="input-group">
				<label>File</label>
				<input type="file" name="resouce_file" class="form-control">
			</div>
			<div class="input-group">
				<label>Details</label>
				<textarea name="details" class="form-control"></textarea>
			</div>
			<div class="text-center"> <input type="submit" class="btn btn-default btn-success" value="Submit"> </div>
		</form>
	</div>

</div>
