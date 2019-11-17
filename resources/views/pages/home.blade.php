@extends('layouts.app')

@section('content')
@if (Auth::check())
    <h1>Hello {{Auth::user()->name}} <span><a href="/logout">(Log out)</a></span></h1>
    @if ($user[0]->role == 'BUYER')
        <h2>You are currently buyer. <span><a href='/request'>Click here</a></span> to request to become seller</h2>
    @endif
    @if($user[0]->role=='SELLER')
        <h2>You are now become a Seller</h2>
    @endif 
@else
    <script>window.location = '/login'</script>
@endif


@endsection