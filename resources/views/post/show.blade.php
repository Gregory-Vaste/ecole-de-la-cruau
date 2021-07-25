@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Show User</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('index.user') }}"> Back</a>
      </div>
       
    </div>
  </div>
  <table class="table table-bordered table-responsive-xl mt-3">
      <thead class="thead-dark">
        <tr>
            <th class="text-center">Title</th>
            <th class="text-center">Description</th>
            <th class="text-center">Autor</th>
            <th class="text-center">Photo</th>
            <th class="text-center">Tools</th>
        </tr>
      </thead>
      <tbody>
            <tr>
              <td>{{$post->title}}</td>
              <td>{{$post->description}}</td>
              <td>{{$post->autor}}</td>
              <td>{{$post->photo}}</td>
              <td>
                  <a href="{{route('post.edit', $post->id)}}"class="btn btn-info ">Edit</a>
                  @csrf
                   @method('DELETE')
                  <a href="{{route('post.delete', $post->id)}}"class="btn btn-danger">Delete</a>
                  
              </td>
           </tr>
      
  
      </tbody>
    </table>   
@endsection