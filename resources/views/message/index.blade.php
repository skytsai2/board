@extends('layout.index')

@section('message')
@if (Session::has('flash_success_message'))
  <div id="message" class="alert alert-success">{{ Session::get('flash_success_message') }}</div>
@endif

@if (Session::has('flash_error_message'))
  <div id="message" class="alert alert-danger">{{ Session::get('flash_error_message') }}</div>
@endif
@endsection