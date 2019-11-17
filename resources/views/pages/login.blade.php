@extends('layouts.app')

@section('content')
<br />
<div class="container box">
<h3 align="center">Login</h3><br />

 @if(isset(Auth::user()->username))
  <script>window.location="/";</script>
 @endif

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

 <form method="POST" action="{{ url('/checklogin') }}">
  <p>There is a problem with the login function</p>
  <p>Please register a new user, then you will be automatically logged in and redirect to homepage</p>
  {{ csrf_field() }}
  <div class="form-group">
   <label>Enter username</label>
   <input type="email" name="email" class="form-control" />
  </div>
  <div class="form-group">
   <label>Enter Password</label>
   <input type="password" name="password" class="form-control" />
  </div>
  <div class="form-group">
   <input type="submit" name="login" class="btn btn-primary" value="Login" />
  </div>
  <div class="form-group">
    <a href="/register">Register</a>
   </div>
 </form>
</div>
@endsection