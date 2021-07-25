@extends('layouts.app')
@section('content')
    <div class="card mb-3 mx-auto" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">
                        {{$post->description}}
                    </p>
                    <small class="text-right text-muted">{{$post->autor}}</small>
                    <a class="like btn btn-primary float-right mr-3 clicks" onclick="click()">like: 0</a>
                </div>
            </div>
        </div>
    </div>
@endsection