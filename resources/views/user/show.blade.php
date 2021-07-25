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
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->firstname}}</td>
            <td>{{$user->adress}}</td>
            <td>{{$user->zipCode}}</td>
            <td>{{$user->is_admin}}</td>
            <td>{{$user->is_adherent}}</td>
            <td>{{$user->is_licencier}}</td>
            <td>{{$user->is_superAdmin}}</td>
            <td>
                <a href="{{route('edit.user', $user->id)}}"class="btn btn-info btn">Edit</a>
                @csrf
                @method('DELETE')
                <a href="{{route('delete.user', $user->id)}}" class="btn btn-danger btn">delete</a>
            </td>
         </tr>
    

    </tbody>
  </table>   
@endsection

