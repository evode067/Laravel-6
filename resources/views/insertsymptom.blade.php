<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert</title>
</head>
<body>
    <form action="store" method="post" enctype="multipart/form-data">
        @csrf
    	<label for="name">Description</label>
    	<input type="text" name="description" value="{{old('description')}}" id="description" autocomplete="off"><br>
        <label for="name">email</label>
        <input type="email" name="email" value="{{old('email')}}" id="email" autocomplete="off"><br>
    	<input type="hidden" name="_token" value="{{csrf_token()}}"><br>
         <label for="name">Date:</label>
  <input type="date" name="historydate " value="{{old('historydate')}}" id="historydate" autocomplete="off"><br>
    	<label for="link">Link</label>
    	<input type="text" name="link" value="{{old('name')}}" id="link" autocomplete="off">
    	<br>
        <br>
       

    	<label for="submit"></label>
    	<input type="submit" name="submit" value="submit" id="submit">
    </form>


</body>
</html> 
@foreach($errors->all() as $error)
<ul>
    <li style="color:red;">{{$error}}</li>
</ul>
@endforeach