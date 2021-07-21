@extends('layouts.app')
@section('content')
<table class="table table-bordered table-responsive-xl mt-3">
    <thead class="thead-dark">
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>adress</th>
        <th>zipCode</th>
        <th>adhenrent</th>
        <th>licencier</th>
        <th>admin</th>
        <th>super Admin</th>
        <th>tools</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->firstname}}</td>
            <td>{{$user->adress}}</td>
            <td>{{$user->zipCode}}</td>
            <td>{{$user->is_admin}}</td>
            <td>{{$user->is_adherent}}</td>
            <td>{{$user->is_licencier}}</td>
            <td>{{$user->is_superAdmin}}</td>
            <td><i class="fas fa-trash-alt">{{'delete.user'}}</i>
                <i class="fas fa-book-open">{{'edit.user'}}</i>
                <i class="fas fa-eye">{{'view.user'}}</i>
            </td>
         </tr>
    
      @endforeach
    </tbody>
  </table>   
@endsection

