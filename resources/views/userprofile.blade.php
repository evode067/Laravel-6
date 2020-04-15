<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User</title>
	<style>
	table,th,tr, td{
		border: 1px solid black;
		border-collapse: collapse;
	}

	</style>
</head>
<body>
	
	<a href="insert">Insert Customer</a>
	<br>
	<br>
	<br>
<table>
	<tr>
		<th>MenstruationDate</th>
		<th>UserId</th>
		<th>Description</th>
		<th>Link</th>
	</tr>
	<tbody>
		@foreach($user as $users)
		<tr>
		
		<td>{{$users->historydate}}</td>
		<td>{{$users->userid}}</td>
		<td>{{$users->description}}</td>
		<td>{{$users->link}}</td>
		@endforeach
		<tr><td colspan="4"><a href="regular">check your Next Menstruation</a></td></tr>
	</tbody>

</table>
</body>
</html>