@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container">
        <div class="row gy-4">
            @foreach ($viewData['products'] as $product)
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100">

                        <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top h-75 img-card">

                        <div class="card-body text-center" style="background-color: #D5C7BC;">
                            <p class="card-text">{{ $product->getName() }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                                class="btn btn-outline-secondary">View Product</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
