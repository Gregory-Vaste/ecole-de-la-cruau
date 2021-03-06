@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="float-left">
          <h2>Index Post</h2>
      </div>
      <div class="float-right">
          <a class="btn btn-info" href="{{ route('post.create') }}">Add Post</a>
      </div>
  </div>
</div>
@if ($message = Session::get('success'))

  <div class="alert alert-success">

      <p>{{ $message }}</p>

  </div>

@endif
<table class="table table-bordered table-responsive-xl mt-3">
    <thead class="thead-dark">
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Autor</th>
        <th width="280px">Tools</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
          <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->autor}}</td>
            <td class="btn-group" role="group">
              <a href="{{route('show.post', $post->id)}}" class="btn btn-info mr-4">View</a>
              <a href="{{route('post.edit', $post->id)}}"class="btn btn-primary mr-4">Edit</a>
              <form action="{{route('post.delete',$post->id)}}" method="POST">
                 @csrf
                @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
         </tr>
    
      @endforeach
    </tbody>
  </table>   
@endsection