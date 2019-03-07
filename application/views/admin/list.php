
<div class="content-wrapper">
	<section class="content">

		<div class="row">
		<hr>
		<hr>
		<hr>
		<hr>
		<a class="btn btn-default btn-lg btn-success" href="<?=site_url('admin/resource/add');?>">Add</a>
		<table class="table">
			<?php
				foreach ($resouce as $keyResource => $valueResource) {
					?>
					<tr>
						<td><img style="width:150px;" src="<?php echo site_url('/uploads/').$valueResource->thubnail; ?>"></td>
						<td><?php echo $valueResource->title; ?></td>
						<td><a class="btn btn-danger" href="<?php echo site_url('/admin/resource/delete/'.$valueResource->id); ?>">Delete</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>
</div>


</section>

</div>
