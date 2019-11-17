@extends('layouts.app')

@section('content')
    @if($status == 0)
    <script>window.location = '/request'</script>
    @endif
    @if ($status == 1)
       <h1>Your request to become seller is still pending</h1>
    @endif
    @if($status == 2)
        <h1>You have been promoted to be Seller</h1>
    @endif
    @if($status == 3)
        <h1>Your request to become Seller has been rejected</h1>
        <h3><span><a href="/newrequest">Click here</a></span> to make a new request</h3>
    @endif
    <a href="/home">Return to home</a>
@endsection