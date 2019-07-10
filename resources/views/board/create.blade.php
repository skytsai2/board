@extends('layout.index')

@section('content')
<form method="post" action="/board" class="form-horizontal">
    @csrf
<fieldset>

<!-- Form Name -->
<legend>Board Data</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="time">Time:</label>  
  <div class="col-md-4">
  <input id="time" name="time" type="datetime-local" required="required" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title:</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" required="required" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="content">Content:</label>  
    <div class="col-md-4">
    <textarea class="form-control" rows="5" id="content" name="content"></textarea>
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