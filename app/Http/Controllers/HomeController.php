<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Showing index page
     * @return Illuminate\View\View
     */
    public function index()
    {
        $this->seo()->setTitle('Home');
        return view('index');
    }
}
