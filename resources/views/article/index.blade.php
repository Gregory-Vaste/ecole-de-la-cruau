 @extends('layouts.index')
 @section('content') 
 <div class="card">
    <div class="col mb-5">
        @foreach ($posts as $post )
        <div class="card-body shadow p-3 mb-5 bg-white rounded">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">
                {{$post->description}}
            </p>
            <small class=" text-muted">{{$post->autor}}</small>
        
            <a href="{{route('article.show', $post->id)}}" class="btn btn-info float-right ">More</a>
           <div class="like-section">
               <button class="like btn btn-info" onclick="incrementLike">0 likes</button>
           </div>
        </div>
        @endforeach
    </div>

 </div>
 @endsection