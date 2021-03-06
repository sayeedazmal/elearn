<div class="content-wrapper">
	<!-- 
		<section class="content-header">
			<h1>
				Data Tables
				<small>advanced tables</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Tables</a>`</li>
				<li class="active">Data tables</li>
			</ol>
		</section>
	 -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title" style="font-size: 1.8em;"><?=$Entity?> Info.</h3>
						<?php
							if($add_facility==0)
							{
						?>
								<button style="border-style:solid;border-width: 2px;" class="btn btn-success pull-right" data-toggle="modal" data-target="#addModal" >
									Add <?=$Entity?>
								</button>
						<?php
							}
						?>
						<div class="modal modal-success" id="addModal" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">						
										<?php 
											// $EntityData=$this->getEntityData();
											// echo '<pre>';
											// print_r($EntityData);
											// echo '</pre>';
											// die('hello');
										?>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h3 class="modal-title"><b>Add <?=$Entity?></b></h3>
									</div>
									<div class="modal-body" style="max-height: calc(100vh - 190px); overflow-y: auto;">
										<div class="col-md-12">
											<div class="alert alert-danger alert-dismissible" style="display: none">
												<button type="button" onclick="$(this).parent().toggle();" class="close" aria-hidden="true">
													×
												</button>
												<h4><i class="icon fa fa-ban"></i>Errors In Form :(</h4>
												<div id="formAddAlert">
										
												</div>
											</div>
											<div class="box box-widget">
												<div class="box-header with-border">
													<h3 class="box-title"><?=$Entity?> Details</h3>
													<div class="box-tools">
														<button type="button" class="btn btn-box-tool" data-widget="collapse">
															<i class="fa fa-minus"></i>
														</button>
													</div>
												</div>
												<div class="box-body">
													<form method="POST" id="formAdd<?=$Entity?>">
														<?php $pf="a"; ?>
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group is-empty">
																		<label for="<?=$pf?>CourseName">Course Name</label>
																		<input type="text" name="<?=$pf?>CourseName" id="<?=$pf?>CourseName" class="form-control" placeholder="Course Name">
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group is-empty">
																		<label for="<?=$pf?>CourseDescription">Course Description</label>
																		<input type="text" name="<?=$pf?>CourseDescription" id="<?=$pf?>CourseDescription" class="form-control" placeholder="Something About Course">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group is-empty is-fileinput">
																		<label for="<?=$pf?>CourseImage">Image</label>
																		<input type="text" readonly="" class="form-control" placeholder="Browse...">
																		<input type="file" name="<?=$pf?>CourseImage" id="<?=$pf?>CourseImage">
																		<!-- <p class="help-block">Example block-level help text here.</p> -->
																	</div>
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="box-footer">
													<input name="btnAdd<?=$Entity?>" id="btnAdd<?=$Entity?>" type="button" class="btn btn-success" value="Add <?=$Entity?>">
													<!--<button type="Reset" class="btn btn-danger pull-right">Reset</button>-->
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>

						<div class="modal modal-success" id="updateModal" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h3 class="modal-title"><b>Update <?=$Entity?></b></h3>
									</div>
									<div class="modal-body" style="max-height: calc(100vh - 190px); overflow-y: auto;">
										<div class="col-md-12">

											<div class="alert alert-danger alert-dismissible" style="display: none">
												<button type="button" onclick="$(this).parent().toggle();" class="close" aria-hidden="true">
													×
												</button>
												<h4><i class="icon fa fa-ban"></i>Errors In Form :(</h4>
												<div id="formUpdateAlert">
												</div>
											</div>
												<div class="box box-widget">
													<div class="box-header with-border">
														<h3 class="box-title"><?=$Entity?> Details</h3>
														<div class="box-tools">
															<button type="button" class="btn btn-box-tool" data-widget="collapse">
																<i class="fa fa-minus"></i>
															</button>
														</div>
													</div>
													<div class="box-body">
														<form method="POST" id="formUpdate<?=$Entity?>">

														</form>
													</div>
													<div class="box-footer">
														<input name="btnUpdate<?=$Entity?>" id="btnUpdate<?=$Entity?>" type="button" class="btn btn-success" value="Update <?=$Entity?>">
														<!--<button type="Reset" class="btn btn-danger pull-right">Reset</button>-->
													</div>
												</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>

						<div class="modal modal-success" id="infoModal" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h3 class="modal-title"><b><?=$Entity?> Info</b></h3>
									</div>
									<div class="modal-body" style="max-height: calc(100vh - 190px); overflow-y: auto;">
										<div class="col-md-12">

											<div class="alert alert-danger alert-dismissible" style="display: none">
												<button type="button" onclick="$(this).parent().toggle();" class="close" aria-hidden="true">
													×
												</button>
												<h4><i class="icon fa fa-ban"></i>Errors In Form :(</h4>
												<div id="formInfoAlert">
												
												</div>
											</div>

												<div class="box box-widget">
													<div class="box-header with-border">
														<h3 class="box-title"><?=$Entity?> Details</h3>
														<div class="box-tools">
															<button type="button" class="btn btn-box-tool" data-widget="collapse">
																<i class="fa fa-minus"></i>
															</button>
														</div>
													</div>
													<div class="box-body">
														<div class="row" id="contentInfoModal">

														</div>
													</div>
												</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="box-body">
						<div class="alert alert-success alert-dismissible" style="display: none">
							<button type="button" onclick="$(this).parent().toggle();" class="close" aria-hidden="true">
								×
							</button>
							<h4><i class="icon fa fa-check"></i>Success Notice :)</h4>
							<div id="pageAlert">
							
							</div>
						</div>
						<table id="tblView<?=$Entity?>" class="table table-bordered table-striped">
							<thead>
								<tr>
									<?php
										foreach ($thead as $th){echo "<th>$th</th>";}
									?>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<?php
										foreach ($thead as $th){echo "<th>$th</th>";}
									?>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
		
	</section>
</div>
<script type="text/javascript">

	<?php

		$this->load->helper([
			'AIOAjax_helper',
			'addUpdateEntityAjaxCode_helper'
		]);

		echo AIOAjax()
					.$DataTableCode
						.addEntityAjaxCode($Entity,$CategoryID)
							.updateEntityAjaxCode($Entity);

	?>
</script>