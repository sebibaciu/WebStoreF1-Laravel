@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <a href="{{ route('teams.redbull') }}">
            <img src="{{ asset('/img/red-bull.png') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a href="{{ route('teams.ferrari') }}">
                <img src="{{ asset('/img/ferrari.png') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a href="{{ route('teams.mercedes') }}">
            <img src="{{ asset('/img/mercedes.png') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a href="{{ route('teams.mclaren') }}">
            <img src="{{ asset('/img/mclaren.png') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/alfa-romeo.png') }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/alphatauri.png') }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/apline.png') }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/williams.png') }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/aston-martin.png') }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2 mx-auto d-block">
            <img src="{{ asset('/img/haasl.png') }}" class="img-fluid rounded">
        </div>
    </div>
@endsection
