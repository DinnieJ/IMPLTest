@extends('layouts.app')

@section('content')
<br />
<div class="container box">
<h3 align="center">Register</h3><br />

 @if ($message = Session::get('error'))
 <div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $message }}</strong>
 </div>
 @endif

 @if (count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
   @endforeach
   </ul>
  </div>
 @endif

 <form method="POST" action="{{ url('/register') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label>Enter your name</label>
    <input type="text" name="name" class="form-control" />
   </div>
  <div class="form-group">
   <label>Enter email</label>
   <input type="email" name="email" class="form-control" />
  </div>
  <div class="form-group">
   <label>Enter Password</label>
   <input type="password" name="password" class="form-control" />
  </div>
  <div class="form-group">
    <label>Retype Password</label>
    <input type="password" name="retypepassword" class="form-control" />
   </div>
  <div class="form-group">
   <input type="submit" name="register" class="btn btn-primary" value="Register" />
  </div>
 </form>
</div>
@endsection