@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="float-left">
          <h2>Index Post</h2>
      </div>
      <div class="float-right">
          <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
          <a class="btn btn-info" href="{{ route('post.create') }}">Add Post</a>
      </div>
  </div>
</div>
<table class="table table-bordered table-responsive-xl mt-3">
    <thead class="thead-dark">
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Autor</th>
        <th>Photo</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
          <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->autor}}</td>
            <td>{{$post->photo}}</td>
            <td><a href="{{route('posts.show', $post->id)}}">View</a>
                <a href="{{route('post.edit', $post->id)}}">Edit</a>
               <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                Delete
            </td>
         </tr>
    
      @endforeach
    </tbody>
  </table>   
@endsection