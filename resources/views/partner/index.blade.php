@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Index Partner</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-info" href="{{ route('partner.create') }}">Add Partner</a>
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
          <th>Name</th>
          <th>Description</th>
          <th>Image</th>
          <th width="280px">Tools</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($partners as $partner)
            <tr>
              <td>{{$partner->name}}</td>
              <td>{{$partner->description_partner}}</td>
              <td><img src="/image/{{$partner->image}}" width="100px"></td>
              <td class="btn-group" role="group">
                  <form action="{{route('partner.destroy',$partner->id)}}" method="POST">
                    <a href="{{route('partner.show', $partner->id)}}" class="btn btn-info mr-4">View</a>
                    <a href="{{route('partner.edit', $partner->id)}}"class="btn btn-primary mr-4">Edit</a>
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