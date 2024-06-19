<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;


class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function download() {
        return view('download');
    }

    public function listNews() {
        return view('news.index');
    }

    public function detailNews($title) {
        return view('news.show');
    }
}
