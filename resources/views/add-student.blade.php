<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>
	<div>
		<h2>Add Student</h2>
		<form method="post" action="{{ URL::to('store-student') }}">
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
				<input type="submit" name="submit" value="add">
			</div>
		</form>
	</div>
</body>
</html>