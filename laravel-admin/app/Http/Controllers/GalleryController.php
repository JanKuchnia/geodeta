<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        return view('pages.galeria', [
            'photos' => Photo::orderBy('sort_order')->get(),
        ]);
    }
}
