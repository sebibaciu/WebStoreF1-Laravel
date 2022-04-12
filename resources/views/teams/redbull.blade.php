@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('color', $viewData['color'])
@section('teamdesc', $viewData['teamdesc'])
@section('carimage', $viewData['carimage'])
@section('driver1name', $viewData['driver1name'])
@section('driver1img', $viewData['driver1img'])
@section('driver1desc', $viewData['driver1desc'])
@section('driver2name', $viewData['driver2name'])
@section('driver2img', $viewData['driver2img'])
@section('driver2desc', $viewData['driver2desc'])
@section('carousel1', $viewData['carousel1'])
@section('carousel2', $viewData['carousel2'])
@section('carousel3', $viewData['carousel3'])
@section('carousel4', $viewData['carousel4'])
@section('content')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img alt="Bootstrap Image Preview" src="@yield('carimage', 'imaginea masinii')" class="mx-auto d-block" />
                <div class="jumbotron">
                    <p>
                        <span>@yield('teamdesc', 'descriere echipa')</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 h-25 overflow-hidden">

                <h2 class="formula1 text-center">
                    @yield('driver1name', 'sofer principal')
                </h2>
                <img class="img-fluid" alt="Bootstrap Image Preview"
                    src="@yield('driver1img', 'sofer principal poza')" />
                <br>
                <div class="overflow-auto d-inline-block" style="height:20em">
                    <p><br>
                        @yield('driver1desc', 'descriere sofer principal')
                    </p>
                </div>
            </div>
            <div class="col-md-6 h-25 overflow-hidden">
                <h2 class="formula1 text-center">
                    @yield('driver2name', 'nume sofer 2')
                </h2>
                <img class="img-fluid" alt="Bootstrap Image Preview" src="@yield('driver2img', 'imagine sofer 2')" />
                <br>
                <div class="overflow-auto d-inline-block" style="height:20em">

                    <p><br>
                        @yield('driver2desc', 'descriere sofer 2')
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="@yield('carousel1', 'imagine 1')" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="@yield('carousel2', 'imagine 2')" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="@yield('carousel3', 'imagine 3')" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="@yield('carousel4', 'imagine 4')" alt="Forth slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
