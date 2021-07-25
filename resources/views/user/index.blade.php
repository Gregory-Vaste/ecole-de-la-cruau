@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="float-left">
          <h2>Index User</h2>
      </div>
      <div class="float-right">
        @if (auth()->user()->is_admin)
          <a class="btn btn-primary" href="{{ route('admin.route') }}"> Back</a>
        @else
          <a class="btn btn-primary" href="{{ route('superAdmin.route') }}"> Back</a>
        @endif
        <a class="btn btn-primary" href="{{ route('create.user') }}">add user</a>
    </div>
     
  </div>
</div>
<table class="table table-bordered table-responsive-xl mt-3">
    <thead class="thead-dark">
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adress</th>
        <th>ZipCode</th>
        <th>Adhenrent</th>
        <th>Licencier</th>
        <th>Admin</th>
        <th>Super Admin</th>
        <th class="text-center">Tools</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->firstname}}</td>
            <td>{{$user->adress}}</td>
            <td>{{$user->zipCode}}</td>
            <td>{{$user->is_adherent}}</td>
            <td>{{$user->is_licencier}}</td>
            <td>{{$user->is_admin}}</td>
            <td>{{$user->is_superAdmin}}</td>
            <td class="btn-group" role="group">
              <form action="{{route('delete.user',$user->id)}}" method="POST">
                <a href="{{route('show.user', $user->id)}}" class="btn btn-info mr-4">View</a>
                <a href="{{route('edit.user', $user->id)}}"class="btn btn-primary mr-4">Edit</a>
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

