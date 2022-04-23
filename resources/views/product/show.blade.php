@extends('layouts.app')
@section('title', $viewData['title'])
{{-- @section('subtitle', $viewData['subtitle'])comment --}}
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-sm-4 d-flex">
                <img src="{{ asset('/storage/' . $viewData['product']->getImage()) }}" class="img-fluid"
                    style="align-self: center;">
            </div>
            <div class="col-md-8 d-flex">
                <div class="card-body">
                    <h4 class="card-title formula1">
                        {{ $viewData['product']->getName() }}
                    </h4>
                    <br>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Price
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h5>{{ $viewData['product']->getPrice() }} €</h5>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Description
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{ $viewData['product']->getDescription() }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Shipping
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Please note that due to the recent outbreak of the Coronavirus,
                                    we recommend expecting a delay of up to 21 days in receiving your order.
                                    Transit times will vary depending on the location of the delivery address.
                                    International Standard Delivery: This service may be delivered through a local mail
                                    service and may not come with a tracking number. If a trackable service is used your
                                    ship confirmation email will contain a tracking number link, that will allow you to
                                    check the status of your package. Orders are usually delivered within 10-20 working days
                                    depending on your location but if it takes longer than this, please allow up to 25
                                    working days from the date your order leaves our warehouse.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <form method="POST" action="{{ route('cart.add', ['id' => $viewData['product']->getId()]) }}">
                        <div class="row text-end">
                            @csrf
                            <div class="col-auto">
                                <div class="input-group col-auto">
                                    <div class="input-group-text">Quantity</div>
                                    <input type="number" min="1" max="10" class="form-control quantity-input"
                                        name="quantity" value="1">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn bg-primary text-white" type="submit">Add to cart</button>
                            </div>
                        </div>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
