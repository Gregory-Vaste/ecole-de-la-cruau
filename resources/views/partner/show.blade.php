@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Show Partner</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('partners.index') }}">Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12>
        <div class="form-group">
            <strong>Name:</strong>
            {{$partner->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Description:</strong>
           {{$partner->description}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Image:</strong>
            <img src="/image{{$product->image}}" style="width: 500px">
        </div>
    </div>
</div>
@endsection