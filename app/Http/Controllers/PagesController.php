<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function campusAndLocation()
    {
        return view('pages.campus_and_location');
    }

    public function coCurricularActivities()
    {
        return view('pages.co_curricular_activities');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function admission()
    {
        return view('pages.admission');
    }

    public function curriculum()
    {
        return view('pages.curriculum');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function jhs()
    {
        return view('pages.jhs');
    }

    public function preSchool()
    {
        return view('pages.pre_school');
    }

    public function primary()
    {
        return view('pages.primary');
    }

    public function visionAndMission()
    {
        return view('pages.vision_and_mission');
    }

    public function welcomeMessage()
    {
        return view('pages.welcome_message');
    }
}
