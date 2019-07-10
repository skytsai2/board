@extends('layout.index')

@section('content')

@if (Session::has('flash_login_error_message'))
<div id="message" class="alert alert-danger">{{ Session::get('flash_login_error_message') }}</div>
@endif

<form method="post" action="/user/login" class="form-horizontal">
    @csrf
<fieldset>

<!-- Form Name -->
<legend>Login</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Account:</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" required="required" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password:</label>  
  <div class="col-md-4">
  <input id="password" name="password" type="text" required="required" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
        <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success" value="y">OK</button>
        <button type="button" id="okOrCancel" name="okOrCancel" class="btn btn-danger" value="n" onclick="history.go(-1);">Cancel</button>
  </div>
</div>

</fieldset>
</form>
@endsection