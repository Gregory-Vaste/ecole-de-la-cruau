@extends('layouts.app')
@section('content')
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
            <td><a href="{{route('posts.show', $post->id)}}"> <i class="fas fa-eye"></i></a>
                <a href="{{route('post.edit', $post->id)}}"> <i class="fas fa-book-open"></i></a>
               <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <i class="fas fa-trash-alt"></i>
            </td>
         </tr>
    
      @endforeach
    </tbody>
  </table>   
@endsection