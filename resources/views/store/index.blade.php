@extends('layouts.master')
@section('title')
    BookStore
@endsection
@section('content')
    @if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{Session::get('success')}}
            </div>
        </div>
    </div>
    @endif
@foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{$product->imagePath}}"
                    style="max-height: 150px" class="img-responsive" alt="...">
                <div class="caption">
                    <h2>{{$product->title}}</h2>
                    <p class="description">{{$product->description}}
                    </p>
                    <div class="clearfix">
                        <div class="pull-left price">$ {{$product->price}}</div>
                     <a href="{{route('product.addToCart',['id' => $product->id])}}" class="btn btn-default pull-right btn-success" role="button" >Add to cart</a></div>
                </div>
            </div>
        </div>
      @endforeach
    </div>
@endforeach

@endsection