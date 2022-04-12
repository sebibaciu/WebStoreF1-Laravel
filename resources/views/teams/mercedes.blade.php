@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('color', $viewData['color'])
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
                <img alt="Bootstrap Image Preview"
                    src="https://www.formula1.com/content/dam/fom-website/teams/2022/mercedes.png.transform/6col/image.png"
                    class="mx-auto d-block" />
                <div class="jumbotron">
                    <p>
                        <span>Mercedes’ modern F1 revival started with the creation of a works squad for 2010 - the platform
                            for a meteoric rise up the Grand Prix order. The team generated huge excitement from the off
                            with the sensational return of Michael Schumacher, but headlines soon followed on track: three
                            podiums in their debut season, all via Nico Rosberg - who then claimed a breakthrough
                            pole/victory double at China in 2012. The following season he was paired with Lewis Hamilton,
                            the duo going on to stage some epic title battles as the Silver Arrows swept all before them to
                            become one of the most dominant forces of the modern F1 era. And with Hamilton now partnered by
                            steely Britt George Russell, Mercedes remain very much the team to beat…</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 h-25 overflow-hidden">

                <h2 class="formula1 text-center">
                    Lewis Hamilton 🇬🇧
                </h2>
                <img class="img-fluid" alt="Bootstrap Image Preview"
                    src="https://www.formula1.com/content/fom-website/en/drivers/lewis-hamilton/_jcr_content/image.img.1920.medium.jpg/1647334259839.jpg" />
                <br>
                <div class="overflow-auto d-inline-block" style="height:20em">
                    <p><br>
                        ‘Still I Rise’ – these are the words emblazoned across the back of Lewis Hamilton’s helmet and
                        tattooed across his shoulders, and ever since annihilating expectations with one of the greatest
                        rookie performances in F1 history in 2007, that’s literally all he’s done: risen to the top of the
                        all-time pole positions list ahead of his hero Ayrton Senna, surged into first place in the wins
                        column surpassing the inimitable Michael Schumacher, and then matched the legendary German’s seven
                        world titles.<br>

                        Is he the G.O.A.T? Few would deny that he’s in the conversation – and what’s more he’s got there his
                        way, twinning his relentless speed with a refusal to conform to stereotypes for how a racing driver
                        should think, dress or behave.<br>

                        Respect is hard earned in F1, but Hamilton – now Sir Lewis Hamilton to be precise – has it from
                        every one of his peers. Why? Because they know that whatever the track, whatever the conditions,
                        whatever the situation, when his visor goes down and the lights go out, it’s Hammertime.<br>
                    </p>
                </div>
            </div>
            <div class="col-md-6 h-25 overflow-hidden">
                <h2 class="formula1 text-center">
                    George Russell 🇬🇧
                </h2>
                <img class="img-fluid" alt="Bootstrap Image Preview"
                    src="https://www.formula1.com/content/fom-website/en/drivers/george-russell/_jcr_content/image.img.1920.medium.jpg/1646750994602.jpg" />
                <br>
                <div class="overflow-auto d-inline-block" style="height:20em">

                    <p><br>
                        He’s the driver with the motto: “If in doubt, go flat out”.<br>

                        George Russell has lived by it in his F1 career to date, out-qualifying seasoned team mate Robert
                        Kubica at all 21 Grands Prix in his rookie season, putting Williams back on the podium in 2021, and
                        landing a Mercedes race seat alongside Lewis Hamilton for 2022.<br>

                        That brilliant baseline speed served Russell well as he totted up titles on his way to Formula 1.
                        The Briton stormed to the 2017 GP3 championship and delivered the 2018 Formula 2 crown under immense
                        pressure.<br>

                        Spotting his potential, world champions Mercedes swooped to sign him to their junior programme in
                        2017, when Russell already had a DTM deal on the table. He banked more experience with practice
                        sessions with Force India and tests for the Silver Arrows, before landing his Mercedes-powered
                        Williams race drive.<br>

                        A refusal to cede ground to his rivals - and commitment to a tricky pass – underpins Russell’s
                        winning mentality. And it’s what got him the call-up to replace Lewis Hamilton for a one-off
                        Mercedes appearance for Sakhir 2020 when the reigning champ was struck down by Covid-19.<br>
                        He kept his head down at Williams in 2021, scoring his first points and podium, all the while
                        keeping his eye on the bigger prize. Having proved himself a hard worker and a tenacious talent,
                        that prize arrived in the form of a chance to take on compatriot and seven-time champion Hamilton in
                        identical machinery.<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="https://www.formula1.com/content/fom-website/en/teams/Mercedes/_jcr_content/gallery/image1.img.1920.medium.jpg/1647085167162.jpg"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.formula1.com/en/teams/Mercedes.html#"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://www.formula1.com/content/fom-website/en/teams/Mercedes/_jcr_content/gallery/image3.img.1920.medium.jpg/1647090476768.jpg"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://www.formula1.com/content/fom-website/en/teams/Mercedes/_jcr_content/gallery/image4.img.1920.medium.jpg/1647091740679.jpg"
                                alt="Forth slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
