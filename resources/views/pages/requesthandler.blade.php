@extends('layouts.app')

@section('content')
<table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Reason</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allrequest as $item)
        @if($item->status == 0)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->email}}</td>
            <td>{{$item->reason}}</td>
            <td>
                <form action="/accept" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$item->id}}"/>
                    <input type="hidden" name="email" value="{{$item->email}}"/>
                    <input class="btn btn-success" type="submit" value="Accept"/>
                </form>
            </td>
            <td>
                <form action="/reject" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$item->id}}"/>
                    <input type="hidden" name="email" value="{{$item->email}}"/>
                    <input class="btn btn-danger" type="submit" value="Reject"/>
                </form>
            </td>
        </tr>
        @endif
      @endforeach
        </tbody>
      </table>

@endsection