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
  <input id="time" name="time" type="datetime-local" readonly="readonly" placeholder="" class="form-control input-md" value="{{$board->time}}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title:</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" readonly="readonly" placeholder="" class="form-control input-md" value="{{$board->title}}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="content">Content:</label>  
    <div class="col-md-4">
    <textarea class="form-control" rows="5" id="content" readonly="readonly" name="content">{{$board->content}}</textarea>
    </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
        <a href="/board" class="btn btn-xs btn-info">回佈告欄</a>
  </div>
</div>

</fieldset>
</form>
@endsection