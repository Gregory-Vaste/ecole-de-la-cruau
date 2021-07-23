@Extends('layouts\app')
@section('content')
<nav class="navbar navbar-light bg-light mb-5">
  @foreach ($categories as $category )
      <li class="nav-item">
          <a href="{{route('category' , ['id'=>$category->id])}}" class="nav-link">{{$category->nom_categories}}</a>
      </li>
  @endforeach   
</nav>

  <div class="row row-cols-1 row-cols-md-4">
@foreach($products as $product)   
    <div class="col mb-5">
      <div class="card h-100">
          <img src="{{asset('img/produits/'.$product->photo)}}" alt="{{$product->name}}" class="img-fluid">
          <div class="card-body">
            <div class="card-title">
              <h5>
                {{$product->name}}
              </h5>
            </div>
            <p>{{$product->description}} <br>
              @if ($product->categories->first()!== null)
              <a href="{{route('category' , ['id'=>$product->categories->first()->id])}}" class="nav-link"><b>{{$product->categories->first()->name}}</b></a>
              @endif
            </p>
          </div>
          <div class="card-footer text-right">
          <a href="{{route('Product',['id'=>$product->id])}}" class="btn btn-primary">Voir ce produit</a>
          </div>
      </div>
    </div>
@endforeach
  </div>
@endsection
{{-- view for all products --}}