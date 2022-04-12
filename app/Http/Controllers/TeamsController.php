<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function ferrari()
    {
        $viewData = [];
        $viewData["title"] = "Ferrari - Online Store";
        $viewData["subtitle"] =  "Scuderia Ferrari";
        $viewData["color"] =  "#ff2800";
        $viewData["carimage"] =  "https://www.formula1.com/content/dam/fom-website/teams/2022/ferrari.png.transform/6col/image.png";
        $viewData["teamdesc"] =  "For many, Ferrari and Formula 1 racing have become inseparable. The only team to have competed
        in every season since the world championship began, the Prancing Horse has grown from the humble
        dream of founder Enzo Ferrari to become one of the most iconic and recognised brands in the
        world. Success came quickly through the likes of Alberto Ascari and John Surtees, and continued
        – in amongst leaner times – with Niki Lauda in the 1970s and then Michael Schumacher in the
        2000s, when Ferrari claimed a then unprecedented five consecutive title doubles, securing their
        status as the most successful and decorated team in F1 history...";
        $viewData["driver1name"] =  "Charles Leclerc";
        $viewData["driver1img"] =  "https://www.formula1.com/content/fom-website/en/drivers/charles-leclerc/_jcr_content/image.img.1920.medium.jpg/1646818893219.jpg";
        $viewData["driver1desc"] =  "Born in the Mediterranean idyll of Monaco, Leclerc arrived in F1 on a tidal wave of expectation.
        Practically peerless on his way to the GP3 and Formula 2 crowns, he showcased a dazzling array of
        skills from scorching pole positions, commanding victories – even when his car caught fire twice at
        Silverstone – to an ability to muscle his way through the pack. Winning back-to-back championships
        also taught Leclerc how to handle pressure, another useful tool in the big pond of Formula 1
        racing.
        Stepping up to F1 in 2018, Leclerc showed flashes of ballistic pace on Saturdays and racing
        brilliance on Sundays, dragging his Sauber beyond its limits – and earning himself a money-can’t-buy
        race seat at Ferrari for 2019, stepping into the shoes of the Scuderia’s last world champion, Kimi
        Raikkonen.
        There he immediately put the cat among the proverbial pigeons, unafraid to go wheel-to-wheel with
        established number one, Sebastian Vettel. A maiden F1 victory at Spa was followed by another a week
        later on Ferrari’s hallowed home turf of Monza. The tifosi had found another new hero – who then
        became the first man to out-score Vettel over a season with the Scuderia, a feat he repeated in
        crushing fashion the following year.
        Out of the car, Leclerc is modest and thoughtful - but then he is on his own very personal mission.
        This exciting young talent is racing for his late father Herve and his friend and mentor Jules
        Bianchi, the F1 driver who died in 2015.
        On the evidence so far, he is doing them both proud";
        $viewData["driver2name"] =  "Carlos Sainz";
        $viewData["driver2img"] =  "https://www.formula1.com/content/fom-website/en/drivers/carlos-sainz/_jcr_content/image.img.1920.medium.jpg/1646818866749.jpg";
        $viewData["driver2desc"] = "";
        return view('teams.ferrari')->with("viewData", $viewData);
    }

    public function mercedes()
    {
        $viewData = [];
        $viewData["title"] = "Mercedes - Online Store";
        $viewData["subtitle"] =  "Mercedes-AMG Petronas F1 Team";
        $viewData["color"] =  "#00D2BE";
        return view('teams.mercedes')->with("viewData", $viewData);
    }
}
