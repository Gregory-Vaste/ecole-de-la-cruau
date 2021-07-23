@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="float-left">
          <h2>Index Product</h2>
      </div>
      <div class="float-right">
          <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
          <a class="btn btn-info" href="{{ route('products.create') }}">Add Product</a>
      </div>
  </div>
</div>
<table class="table table-bordered table-responsive-xl mt-3">
    <thead class="thead-dark">
      <tr>
        <th>Photo</th>
        <th>Title</th>
        <th>Description</th>
        <th>price</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
          <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->autor}}</td>
            <td>{{$product->photo}}</td>
            <td><a href="{{route('products.show', $product->id)}}">View</a>
                <a href="{{route('product.edit', $product->id)}}">Edit</a>
               <form action="{{route('products.destroy', $product->id)}}" method="POST">
                @csrf
                @method('DELETE')
                Delete
            </td>
         </tr>
    
      @endforeach
    </tbody>
  </table>   
@endsection