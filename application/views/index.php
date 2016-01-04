<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courses</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/index_styles.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h3>Add a new course</h3>
		<!-- Form to submit Course name & description -->
		<form action='courses/add' method='post'>
			<div class="row">
				<label for='name' class='col-xs-3 col-md-2'>Course name:</label>
				<input type='text' id='name' name='name' class='col-xs-7 col-sm-5 col-md-4'>
				<!-- Echo out errors for 'Course name' field if any exists -->
				<?php 
					if($this->session->flashdata('name'))
					{
						echo "<span class='error col-xs-12 col-sm-12 col-md-5'>".$this->session->flashdata('name')."</span>";
					}
				 ?>
			</div>
			<div class="row">
				<label for='description' class='col-xs-3 col-md-2'>Description:</label>
				<textarea id='description' name='description' name='Course name' class='col-xs-7 col-sm-5 col-md-4' placeholder='( optional )'></textarea>
			</div>
			<div class="row">
				<input type='submit' value='Add' class='submit col-xs-offset-8 col-sm-offset-6 col-md-offset-5 col-xs-2 col-sm-2 col-md-1'>
			</div>
		</form>
		<!-- Table displaying courses, description, time-created, & urls to courses within the table -->
		<h3>Courses</h3>
		<div class="row">
			<div class="col-sm-12">
				<table class='table table-striped table-bordered'>
					<tr>
						<th>Course Name</th>
						<th>Description</th>
						<th>Date Added</th>
						<th>Actions</th>
					</tr>
						<tbody>
							<?php 
								// set local variable '$courses' to courses table in database 
								$courses = $this->session->userdata('courses');
								// display each course array from courses in descending order
								for($x = count($courses)-1; $x >= 0; $x--)
								{?>
									<tr>
										<td>
											<?php echo $courses[$x]['name'];  ?>
										</td>
										<td>
											<?php echo $courses[$x]['description']; ?>
										</td>
										<td>
											<?php echo $courses[$x]['date']; ?>
										</td>
										<td>
											<a class="remove_link" href="destroy/<?php echo $courses[$x]['id']; ?>">remove</a>
											<!-- echo $courses['id'] -->
										</td>
									</tr>
								<?}
							 ?>
						</tbody>
					<tr>
					</tr>
				</table> <!-- end of table -->
			</div>
		</div>
	</div> <!-- end of container -->
</body> 
</head>

<!-- location: views/index.php -->