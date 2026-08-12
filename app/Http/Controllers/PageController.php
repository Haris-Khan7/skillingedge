<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function manufacturingPartner()
    {
        return view('pages.manufacturing-partner');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function itTeam()
    {
        return view('pages.it-team');
    }

    public function rd()
    {
        return view('pages.rd');
    }

    public function career()
    {
        return view('pages.career');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
