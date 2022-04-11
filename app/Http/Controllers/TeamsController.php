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


