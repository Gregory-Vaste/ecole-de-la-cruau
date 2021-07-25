@extends('layouts.app')
@section('content')
<div class="card-deck">
    @foreach ($partners as $partner )
    <div class="card">
      <img class="card-img-top" src="{{asset('image/'.$partner->image)}}" alt="{{$partner->name}}">
      <div class="card-body">
        <h5 class="card-title">{{$partner->name}}</h5>
        <p class="card-text">{{$partner->description}}</p>
      </div>
    </div>
    @endforeach
  </div>
  @endsection