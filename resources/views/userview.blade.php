<!DOCTYPE html>
<html>
<head>
	<title><style>
     input {
  width: 10000%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}   
    </style></title>
</head>
<body>
	
         <div style="border: 1px solid black; position: absolute;border-radius: 2px;width: 800px; left: 100px; top: 100px;padding: 2px;background-image: url("img/water.jpg");"><center></center><center><table><label><h1> <center>Registration Form</center> </label>

  <form action="submit" method="post" enctype="multipart/form-data">
	@csrf
	<tbody>
  <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('FirstName') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="name" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
		 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>





				<tr><td>Country&nbsp;&nbsp;&nbsp;</td><td>
    	
    	        <select name="country" id="country">
            <option value="USA">USA</option>
            <option value="ENGLAND">ENGLAND</option>
            <option value="JAPAN">JAPAN  </option>
            <option value="ITALY">ITALY</option>
        </select></td></tr>
        <tr><td> Province</td><td>
        <select name="province" id="province">
            <option value="North">North</option>
            <option value="South">South</option>
            <option value="East">East  </option>
            <option value="West">West</option>
        </select></td></tr>
        <tr><td> District</td><td>
        <select name="district" id="district">
            <option value="kicukiro">Kicukiro</option>
            <option value="gasabo">Gasabo</option>
            <option value="nyarugenget">Nyarugenge  </option>
            <option value="muhanga">muhanga</option>
        </select></td></tr>
        <tr><td> Sector</td><td>
        <select name="sector" id="sector">
            <option value="kicukiro">Kicukiro</option>
            <option value="Niboyi">Niboyi</option>
            <option value="gatenga">Gatenga  </option>
            <option value="Nyarutarama">Nyarutarama</option>

        </select></td></tr>
        <tr><td> cell</td><td>
        <select name="cel" id="cel">
            <option value="kicukiro">Kicukiro</option>
            <option value="Niboyi">Niboyi</option>
            <option value="gatenga">Gatenga  </option>
            <option value="Nyarutarama">Nyarutarama</option>
            
        </select></td></tr>
        <tr><td>Type of User </td><td colspan="2"> <input type="radio" name="usertype" value="regular">regular<input type="radio" name="usertype" value="irregular">Irregular</td></tr>
<tr><td colspan="2"><button type="submit">Submit data</button></td></tr>
</tbody>	
</table></form></div></table></center></body></html>
