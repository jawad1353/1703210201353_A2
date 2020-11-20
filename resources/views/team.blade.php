<!DOCTYPE html>
<html>
<head>
	<title>Team </title>
</head>
<body>
 <h2>This is team page</h2>
 <p>{{ $name }}</p>
 <ul>
 	@foreach($mynames as $n)
        <li>{{ $n }}</li>
 	@endforeach
 </ul>
</body>
</html>