<!DOCTYPE html>
<html>
	<head>
		<title>Fees</title>
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
			<div>
				<a href="/"><button class="button">Home</button></a>
				<a href="/search/fees"><button class="button">Search</button></a>
				<form action="fees" method="post" >
					{{csrf_field()}}
					<h2>Fees Payment Form</h2>
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
							<label>Full Name:</label>
						</div>
						<div class="col-75">
							<input type="text" name="full_name"><br><br>
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label>Amount</label>
						</div>
						<div class="col-75">
							<input type="number" name="amount"><br><br>
						</div>
					</div>

					<button class="button" type="submit" name="submit">Submit</button><br><br>
					
					
					
				</form>
			</div>
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
	</div>
</body>
</html>