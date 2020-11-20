<!DOCTYPE html>
<html>
<head>
	<title>Employees</title>
</head>
<body>
	<div>
		<h2>Employees</h2>
		<a href="{{ URL::to('add-employee') }}">ADD EMPLOYEE</a>
	<table>
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>DOB</th>
		</thead>
		<tbody>
			@foreach($employees as $e)
			<tr>
				<td>{{ $e->name }}</td>
				<td>{{ $e->email }}</td>
				<td>{{ $e->dob }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</body>
</html>