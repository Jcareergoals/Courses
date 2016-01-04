<!DOCTYPE html>
<html lang="en">
<head>
	<title>Remove Course</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../assets/destroy_styles.css">
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
		<div class="row">
			<h2 class='col-xs-12 col-md-12 col-lg-12'>Are you sure you want to delete the following course?</h2>
			<table class='table col-xs-12 col-md-12'>
				<tr>
					<td class='col-xs-2 col-md-2'>Name:</td>
					<td><?php echo $name; ?></td>
				</tr>
				<tr>
					<td class='col-xs-2 col-md-2'>Description</td>
					<td><?php echo $description; ?></td>
				</tr>
			</table>
		</div>
		<div class="row">
			<div >
				<a href="/"><input type='button' value='No' class='cancel col-xs-offset-1 col-md-offset-3'></a>
				<a href="/delete/<?php echo $id; ?>"><input type='button' value='Yes! I want to delete this' class='delete'></a>	
			</div>
		</div>
	</div> <!-- End Container -->
</body> 
</head>

<!-- Location: views/destroy.php -->