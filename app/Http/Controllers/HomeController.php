<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->take(6)->get();

        return view('welcome.index', compact(['products']));
    }

    public function performance()
    {
        return view('what-we-do.performance');
    }

    public function health()
    {
        return view('what-we-do.health');
    }

    public function development()
    {
        return view('what-we-do.development');
    }

    public function contact()
    {
        return view('contact.index');
    }

    public function setLanguage($lang)
    {
        if (in_array($lang, ['en', 'sq'])) {
            \Session::put('lang', $lang);
        } else {
            \Session::forget('lang');
        }

        return redirect()->back();
    }
}
