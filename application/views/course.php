<?php	
	// echo "<pre>";
	// print_r($Course_Data);
	// print_r($Chapter_Data);
	// echo "</pre>";
	// die();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* The grid: Three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 50px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: white;
}

.containerTab {
  padding: 20px;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>

	<section class="banner inner-page">
		<div class="banner-img"><img src="<?=base_url('resources/user/assets/');?>images/banner/courses_background.jpg" alt=""></div>
		<div class="page-title">	
			<div class="container">
				<h1>courses details Free Courses</h1>
			</div>
		</div>
	</section>
	<section class="breadcrumb">
		<div class="container">
			<ul>
				<li><a href="<?=site_url('/home/');?>">Home</a></li>
				<li><a href="<?=site_url('/category/');?>">All courses</a></li>
				<li><a href="#">courses details</a></li>
			</ul>
		</div>
	</section>
	<div class="course-details">
		<div class="container">
			<div class="row">
				<!-- <div class="col-sm-8 col-md-9">original of below line -->
				<div class="col-sm-10 col-md-10 col-md-offset-1">
					<h2><?=$Course_Data->CourseName;?></h2>
					<div class="course-details-main" style="height:225px;width:225px;">
						<div class="course-img">
							<img src="<?=base_url('resources/admin/uploads/'.$Course_Data->CourseImage);?>" alt="" style="height:225px;width:225px;">
						</div>
					</div>
					<div class="info">
						<h4>Course Overview</h4>
						<p><?=$Course_Data->CourseDescription;?></p>
					</div>
				    <div class="row">
						  <div class="column" onclick="openTab('course');" style=" background: linear-gradient(to left, #33ccff 3%, #6600ff 82%);">
						   Syllabus
						  </div>
						  <div class="column" onclick="openTab('video');" style="background: linear-gradient(to bottom, #33ccff 11%, #9933ff 91%);">
						    Video File
						  </div>
						  <div class="column" onclick="openTab('file');" style="background: linear-gradient(to left, #33ccff 3%, #6666ff 99%);">
						   PDF Document
						  </div>
					</div>

					<div class="syllabus">
					<div id="course" class="containerTab" style="display:none;background:white;">
				  	<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
	  					<?php
							$flag=1;
							foreach($Chapter_Data as $cd)
							{
						?>
								<div class="syllabus-box">
									<div class="syllabus-title">Lesson <?=$flag?></div>
									<div class="syllabus-view<?php if($flag==1)echo ' first ';?>">
										<div class="main-point<?php if($flag==1)echo ' active ';?>"><?=$cd->ChapterName?></div>
										<div class="point-list">
											<ul>
												<?php
													foreach ($cd->Section_Data as $sd)
													{
												?>
														<li><a href="<?=site_url('/Section/'.$sd->SectionID);?>"> <?=$sd->SectionName?> <span class="hover-text">Let's Go<i class="fa fa-angle-right"></i></span></a></li>
												<?php
													}
												?>
											</ul>
										</div>
									</div>
								</div>
						<?php
							$flag++;
							}
						?>
					</div>	
				</div>
			</div>
		</div>
	</div>
	</div>
	
	<div class="container">

	  <div id="video" class="containerTab" style="display:none;background:white;">
	  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
	  <div class="resources">
	  
	  		<h2>Video Resource</h2>
	  		<div class="row">
	  		 <?php
					foreach ($resources as $keyResouce => $valueResouce) {
						if(strtolower($valueResouce->type) == 'video'){
						?>
				
						<div class="col-md-4">
						
							<h3><?php echo $valueResouce->title; ?></h3>
							<video poster="<?php echo site_url('uploads/'.$valueResouce->thubnail); ?>" width="400" controls>
							  <source src="<?php echo site_url('uploads/'.$valueResouce->url); ?>" type="video/mp4">
							  <source src="mov_bbb.ogg" type="video/ogg">
							  Your browser does not support HTML5 video.
							</video>
						
					 </div>
					
						<?php

						}
					}

					?>
				 </div>

	</div>
	</div>
</div>
	
	
	<div class="container">
	<div id="file" class="containerTab" style="display:none;background:white;">
	  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
	   <div class="resources">
	   	 	  <h2>PDF Document</h2>
				<div class="row">
					<?php
					foreach ($resources as $keyResouce => $valueResouce) {
						if(strtolower($valueResouce->type) != 'video'){

					?>
					<div class="col-md-4">
						<img src="<?php echo site_url('uploads/'.$valueResouce->thubnail); ?>">
						<h3><?php echo $valueResouce->title; ?></h3>
						<a href="<?php echo site_url('uploads/'.$valueResouce->url); ?>" class="btn btn-info">Download</a>
					</div>
						<?php
						}
					}
					?>
				</div>

	   	 </div>
	  
	</div>
</div>




<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>

