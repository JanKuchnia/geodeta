<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function oNas(): View
    {
        return view('pages.o-nas');
    }

    public function kontakt(): View
    {
        return view('pages.kontakt');
    }
}
