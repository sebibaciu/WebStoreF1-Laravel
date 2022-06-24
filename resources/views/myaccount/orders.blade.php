@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('balance', $viewData['balance'])
@section('size', $viewData['size'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Account Balance
        </div>
        <div class="card-body">
            <h5 class="card-title">${{ $viewData['balance'] }}</h5>
            <p class="card-text">Your account balance is updated every 15 minutes.</p>
        </div>
    </div>
    @forelse ($viewData["orders"] as $order)
        <div class="card mb-4">
            <div class="card-header">
                Order #{{ $order->getId() }}
            </div>
            <div class="card-body">
                <b>Date:</b> {{ $order->getCreatedAt() }}<br />
                <b>Total:</b> ${{ $order->getTotal() }}<br />
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Item ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->getItems() as $item)
                            <tr>
                                <td>{{ $item->getId() }}</td>
                                <td>
                                    <a class="link-success"
                                        href="{{ route('product.show', ['id' => $item->getProduct()->getId()]) }}">
                                        {{ $item->getProduct()->getName() }}
                                    </a>
                                </td>
                                <td>${{ $item->getPrice() }}</td>
                                <td>{{ $item->getQuantity() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @empty
        <div class="alert alert-danger" role="alert">
            Seems to be that you have not purchased anything in our store =(.
        </div>
    @endforelse
    </div>
@endsection
