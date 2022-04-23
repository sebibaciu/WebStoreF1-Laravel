@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

    <link href="{{ asset('/css/blink.css') }}" rel="stylesheet" />
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
            <a href="{{ route('teams.alfaromeo') }}">
                <img src="{{ asset('/img/alfa-romeo.png') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a href="{{ route('teams.alphatauri') }}">
                <img src="{{ asset('/img/alphatauri.png') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a href="{{ route('teams.alpine') }}">
                <img src="{{ asset('/img/apline.png') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a href="{{ route('teams.williams') }}">
                <img src="{{ asset('/img/williams.png') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <a href="{{ route('teams.astonmartin') }}">
                <img src="{{ asset('/img/aston-martin.png') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-2 mx-auto d-block">
            <a href="{{ route('teams.haas') }}">
                <img src="{{ asset('/img/haasl.png') }}" class="img-fluid rounded">
            </a>
        </div>
    </div>
    

    <script type="text/javascript">
        $(document).ready(function() {
            $('#memberModal').modal('show');
        });
    </script>


    <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered formula1">
            <div class="modal-content">

                <div class="modal-body">
                    <a href="{{ route('product.index') }}">
                        <img class="fluid-rounded" src="{{ asset('/img/leclerc_wink.gif') }}">
                    </a>
                </div>
                <div class="modal-footer text-center">
                    <h5 class="blink_me" style="color: red;">Check the new 2022 merchandise!</h6>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.getElementById('vid').play();
    </script>
@endsection
