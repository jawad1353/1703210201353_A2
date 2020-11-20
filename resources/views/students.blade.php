<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
</head>
<body>
	<div>
		<h2>Students</h2>
		<table border="2">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>DOB</th>
				<th>Edit</th>
			</thead>
			<tbody>
				@foreach($students as $s)
				<tr>
					<td>{{ $s->name }}</td>
					<td>{{ $s->email }}</td>
					<td>{{ $s->dob }}</td>
					<td><a href="{{ URL::to('edit-student/'.$s->id) }}">Edit</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>