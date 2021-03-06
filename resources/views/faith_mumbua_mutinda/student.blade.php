<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
	</head>
	<style>
				.button
			{
				border-radius: 12px;
				background-color: teal;
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
			* {
		box-sizing: border-box;
		}
		input[type=text], select, textarea {
		width: 100%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize: vertical;
		}
		input[type=number], select, textarea {
		width: 100%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize: vertical;
		}
		input[type=date], select, textarea {
		width: 100%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize: vertical;
		}
		label {
		padding: 12px 12px 12px 0;
		display: inline-block;
		}
		input[type=submit] {
		background-color: #4CAF50;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		float: right;
		}
		input[type=submit]:hover {
		background-color: #45a049;
		}
		.container {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
		width: 80%;
		margin-left: 10%;
		}
		.col-25 {
		float: left;
		width: 25%;
		margin-top: 6px;
		}
		.col-75 {
		float: left;
		width: 75%;
		margin-top: 6px;
		}
		.row:after {
		content: "";
		display: table;
		clear: both;
		}
		@media screen and (max-width: 600px) {
		.col-25, .col-75, input[type=submit] {
		width: 100%;
		margin-top: 0;
		}
		}
	</style>
	<body align="center">
		<div class="container">
			<a href="/"><button class="button">Home</button></a>
			<p>Register Student</p>

			<form action="student" method="post">
				{{csrf_field()}}
				<div class="row">
					<div class="col-25">
						<label>Student Number</label>
					</div>
					<div class="col-75">
						<input type="number" name="student_number">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label>Full Name</label>
					</div>
					<div class="col-75">
						<input type="text" name="full_name">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label>Address</label>
					</div>
					<div class="col-75">
						<input type="text" name="address">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label>Date of Birth</label>
					</div>
					<div class="col-75">
						<input type="date" name="date_of_birth">
					</div>
				</div>
				<br>
				<button class="button" type="submit" name="Register">Register</button><br><br>
			
				@if ($errors->any())
				<div>
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
					
				</div>
			</div>
			@endif
		</form>
		
	</body>
</html>