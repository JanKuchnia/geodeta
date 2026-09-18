<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function index(): View
    {
        return view('pages.opinie', [
            'reviews' => Review::where('published', true)->latest()->get(),
        ]);
    }
}
