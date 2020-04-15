<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update</title>
</head>
<body>
<form action="update/{{$user->id}}" method="post" enctype="multipart/form-data">
	<label for="historydate">HistoryDate</label>
	<input type="date" name="historydate" id="historydate" value="{{$user->historydate}}">
	<br>
	{{method_field('patch')}}
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<br>
	<label for="description">Description</label>
	<input type="text" name="description" id="description" value="{{$user->description}}">
	<br>
	<label for="link">Link</label>
	<input type="text" name="link" id="link" value="{{$user->link}}">
	<br>
	<br>
	<br>
 	
 	<br>
 	<br>
	<label></label>
	<input type="submit" name="submit" id="submit" value="submit">

</form>
</body>
</html>