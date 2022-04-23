@extends('layouts.app')
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container">
        <br />
        <div class="text-center formula1">
            <h4>You can find us here!</h4>
        </div>
        </br>
        <div class="d-flex flex-column">
            <div class="p-2 mw-100">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2847.9788270850263!2d26.11884671552388!3d44.45410537910186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8b7fe13f51d%3A0x931fbdd89c7f979!2sStrada%20Lizeanu%2034%2C%20Bucure%C8%99ti!5e0!3m2!1sen!2sro!4v1650584060167!5m2!1sen!2sro"
                    width="1250" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="p-2">
                <ul class="list-group text-center">
                    <li class="list-group-item"><b>Street:</b> Strada Lizeanu 34, Bucuresti 2, 021112</li>

                    <li class="list-group-item"><b>City:</b> Bucharest</li>

                    <li class="list-group-item"><b>State/province/area:</b> Bucharest</li>

                    <li class="list-group-item"><b>Phone number </b><a href="tel:+40 212 120 480"> +40 212 120 480</a>
                    </li>

                    <li class="list-group-item"><b>Email </b><a href = "mailto: testlicenta14@gmail.com"> testlicenta14@gmail.com</a>
                    </li>

                    <li class="list-group-item"><b>Country</b> Romania
                    </li>

                </ul>
            </div>
        </div>
    </div>
    </div>

@endsection
