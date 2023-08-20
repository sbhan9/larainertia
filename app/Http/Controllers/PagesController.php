<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function galeri()
    {
        return Inertia::render('Galeri');
    }

    public function kontak()
    {
        return Inertia::render('Kontak');
    }

    public function cari_atlet()
    {
        return Inertia::render('CariAtlet');
    }

    public function tampil_atlet(Request $request)
    {
        dd($request->all());
    }
}
