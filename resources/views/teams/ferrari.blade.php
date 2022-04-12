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
                <img class="img-fluid" alt="Bootstrap Image Preview" src="@yield('driver1img', 'sofer principal poza')" />
                <br>
                <div class="overflow-auto d-inline-block" style="height:20em">
                    <p><br>
                        @yield('driver1desc', 'descriere sofer principal')
                    </p>
                </div>
            </div>
            <div class="col-md-6 h-25 overflow-hidden">
                <h2 class="formula1 text-center">
                    Carlos Sainz 🇪🇸
                </h2>
                <img class="img-fluid" alt="Bootstrap Image Preview" src="https://www.formula1.com/content/fom-website/en/drivers/carlos-sainz/_jcr_content/image.img.1920.medium.jpg/1646818866749.jpg" />
                <br>
                <div class="overflow-auto d-inline-block" style="height:20em">

                    <p><br>
                        He’s the matador from Madrid racing royalty.<br>

                        After entering F1’s Bull Ring paired alongside Max Verstappen at Toro Rosso in 2015, Sainz quickly
                        showed his fighting spirit. A tenacious racer, he puts the car on the edge as he hustles his way
                        through the pack. No wonder Sainz has earned the nickname Chilli.<br>

                        But the Spaniard is intelligent as well as instinctive, thinking his way through a race and into the
                        points. This calm temperament follows him off track where he remains unfazed by the pressures of
                        forging a Grand Prix career with a famous name.<br>

                        Sainz is the son of double World Rally champion, also his namesake, and has brought some of Dad’s
                        driving skills to the F1 circuit – junior loves a delicious dose of drift for one.<br>

                        After following in his famous father’s tyre tracks, Sainz has had big racing boots to fill – first
                        at McLaren where he replaced his childhood hero Fernando Alonso, and now at Ferrari, in the seat
                        formerly owned by Sebastian Vettel. It is never easy living in the shadow of sporting giants, but
                        Sainz has shown the drive and disposition to deal with it. Vamos!<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/gallery/image1.img.1920.medium.jpg/1647107707871.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/gallery/image2.img.1920.medium.jpg/1647085483435.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/gallery/image3.img.1920.medium.jpg/1647000607750.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/gallery/image4.img.1920.medium.jpg/1647007136048.jpg" alt="Forth slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
