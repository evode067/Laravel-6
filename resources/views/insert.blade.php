<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert
        <style>
    table,th,tr, td{
        border: 1px solid black;
        border-collapse: collapse;
    }</title>

    </style>
</head>
<body>
    <form action="store" method="post" enctype="multipart/form-data">
    	<label for="firstname">FirstName</label>
    	<input type="text" name="firstname" value="{{old('name')}}" id="firstname" autocomplete="off"><br>
        <label for="firstname">SecondtName</label>
        <input type="text" name="secondtname" value="{{old('name')}}" id="secondname" autocomplete="off"><br>
    	<input type="hidden" name="_token" value="{{csrf_token()}}"><br>
    	<label for="email">Email</label>
    	<input type="text" name="email" value="{{old('name')}}" id="email" autocomplete="off">
    	<br>
        <br>
        Country&nbsp;&nbsp;&nbsp;<select name="country" id="country">
            <option value="USA">USA</option>
            <option value="ENGLAND">ENGLAND</option>
            <option value="JAPAN">JAPAN  </option>
            <option value="ITALY">ITALY</option>
        </select>
         Province&nbsp;&nbsp;&nbsp;<select name="country" id="country">
            <option value="North">North</option>
            <option value="South">South</option>
            <option value="East">East  </option>
            <option value="West">West</option>
        </select>
        <br>
        <br>
        Type of User&nbsp;&nbsp;&nbsp;<input type="radio" name="usertype" value="regular">regular
        <input type="radio" name="usertype" value="irregular">Irregular
       

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