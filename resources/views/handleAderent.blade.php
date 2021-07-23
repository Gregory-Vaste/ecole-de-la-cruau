<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard adherent') }}
        </h2>
    </x-slot>

        
      <div class="content-card shadow">
        <h1 class="title-desc">Nos produits recommandés : </h1>
        <div class="row row-cols-1 row-cols-md-3 ml-2" style="max-width: 1110px;">
          @foreach ($products as $product)
            
          <div class="col">
            <div class="card h-100 ">
              <img src="{{asset('img/produits/'.$product->photo_produit)}}" class="card-img-top" alt="...">
              <div class="card-body ">
                <h5 class="card-title"> {{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn text-muted">{{$product->priice}}</button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

</x-app-layout>