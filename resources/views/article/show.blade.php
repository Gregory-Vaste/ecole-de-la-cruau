@extends('layouts.index')
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
                </div>
            </div>
        </div>
    </div>
@endsection