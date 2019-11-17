@extends('layouts.app')

@section('content')
    <h1>Upgrade to Seller</h1>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif
    <p>Reason</p>
    <form method="POST" action="/createrequest" >
        {{ csrf_field() }}
        <div class="form-group">
            <textarea class="form-group" name="reason" cols="120" rows="10" style="resize: none"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="sendrequest" class="btn btn-primary" value="Send request" />
        </div>
    </form>
    <a href="/home">Return to home</a>
@endsection