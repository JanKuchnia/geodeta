<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('pages.uslugi.index', [
            'services' => Service::orderBy('sort_order')->get(),
        ]);
    }

    public function show(Service $service): View
    {
        return view('pages.uslugi.show', ['service' => $service]);
    }
}
