@extends('layout.index')

@section('content')
<form method="post" action="/board/{{ $board->id }}" class="form-horizontal">
    @csrf
    @method('PUT')
<fieldset>

<!-- Form Name -->
<legend>Board Data</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="time">Time:</label>  
  <div class="col-md-4">
  <input id="time" name="time" type="datetime-local" required="required" placeholder="" class="form-control input-md" value="{{$board->time}}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title:</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" required="required" placeholder="" class="form-control input-md" value="{{$board->title}}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="content">Content:</label>  
    <div class="col-md-4">
    <textarea class="form-control" rows="5" id="content" name="content">{{$board->content}}</textarea>
    </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success" value="y">OK</button>
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger" value="n">Cancel</button>
  </div>
</div>

</fieldset>
</form>
@endsection