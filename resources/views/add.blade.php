<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>
	<h2>Add Employee</h2>
	<div>
		<form method="post" action="{{ URL::to('insert-employee')}}">
			{{ csrf_field() }}
			<div>
			 	<label>Name</label>
			 	<input type="text" name="name">
			</div>
			<div>
			 	<label>Email</label>
			 	<input type="email" name="email">
			</div>
			<div>
			 	<label>DOB</label>
			 	<input type="date" name="dob">
			</div>
			<div>
				<input type="submit" value="Add" name="submit">
			</div>


		</form>
	</div>
</body>
</html>