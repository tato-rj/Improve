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

        if (app()->environment('local') || session()->has('goodtogo'))
            return view('welcome.index', compact('products'));

        return view('gate');
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
