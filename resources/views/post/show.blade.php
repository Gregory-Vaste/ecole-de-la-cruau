@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>L'Ecole en action</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="card-deck">
        @foreach ( $posts as $post  )
             <div class="card">
            {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <p class="card-text"><small class="text-muted">{{$post->autor}}</small></p>
            </div>
            </div> 
        @endforeach
   
  </div>
@endsection