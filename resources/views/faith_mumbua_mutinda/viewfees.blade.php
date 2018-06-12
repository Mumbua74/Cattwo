<!DOCTYPE html>
<html>
<head>
	<title>View Fees</title>
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
		table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;}
	</style>

<body align="center">
	<div class="container">
		<a href="/fees"><button class="button">Back</button></a>
		<a href="/viewfeesall/fees"><button class="button">ViewAll</button></a>
		<table>
			<h2>Search Fees Payment record</h2>
			<form action="/search/fees" method="get">
				{{csrf_field()}}
				<label>Student Number</label>
				<input type="number" name="student_number">
				<br>
				<button class="button" type="submit" name="search">Search</button>
				

			</form>
			<tr>
				<th>Student Number</th>
				<th>Full Name</th>
				<th>Date Of Payment</th>
				<th>Amount</th>
			</tr>
			@foreach($fee as $value)
			<tr>
			   <td>{{$value->student_number}}</td>
			    <td>{{$value->full_name}}</td>
			    <td>{{$value->date_of_payment}}</td>
			    <td>{{$value->amount}}</td>
			</tr>
			@endforeach	
		 

		</table>
		
<p>The total amount of fees paid is: {{$sum}}</p>
	</div>

</body>
</html>