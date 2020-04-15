!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View all history</title>
	<style>
		table,th,tr,td{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<table>
	<tr>
		<th>HistoryDate</th>
		<th>Description</th>
		<th>Link</th>
		<th></th>
		<th></th>
	</tr>
	<tbody>
		@foreach($user as $user)
		<tr>
			<td>{{$user->historydate}}</td>
			<td>{{$user->description}}</td>
			<td>{{$user->link}}</td>
			<td><a href="history/{{$user->description}}">View by id</a></td>
		<td><a href="edit/{{$user->description}}">Update</a></td>
		<td><a href="delete/{{$user->id}}">Delete customer</a></td>
		</tr>
		@endforeach

	</tbody>
</table>
</body>
</html>