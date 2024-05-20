<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Book; // Tambahkan ini
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(): View
    {
        $books = Book::all(); // Perbaiki ini

        return view('home.index', ['books' => $books]);
    }
}
