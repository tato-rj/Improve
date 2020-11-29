<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|unique:products,name_en',
            'headline_en' => 'required|max:124',
            'description_en' => 'required',
            'price_en' => 'required|integer',
            'cover_image' => 'required|image'
        ]);

        Product::create([
            'name_en' => $request->name_en,
            'name_sq' => $request->name_sq,

            'headline_en' => $request->headline_en,
            'headline_sq' => $request->headline_sq,

            'description_en' => $request->description_en,
            'description_sq' => $request->description_sq,

            'price_en' => $request->price_en,
            'price_sq' => $request->price_sq,

            'cover_path' => $request->file('cover_image')->store('products', 'public'),
        ]);

        return redirect(route('admin'))->with('success', 'The product has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $suggestions = Product::where('id', '!=', $product->id)->latest()->take(6)->get();

        return view('products.show', compact(['product', 'suggestions']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name_en' => 'required',
            'headline_en' => 'required|max:124',
            'description_en' => 'required',
            'price_en' => 'required|integer',
            'cover_image' => 'sometimes|image'
        ]);


        if ($request->has('cover_image'))
            \Storage::disk('public')->delete($product->cover_path);

        $product->update([
            'name_en' => $request->name_en,
            'name_sq' => $request->name_sq,

            'headline_en' => $request->headline_en,
            'headline_sq' => $request->headline_sq,

            'description_en' => $request->description_en,
            'description_sq' => $request->description_sq,

            'price_en' => $request->price_en,
            'price_sq' => $request->price_sq,

            'cover_path' => $request->has('cover_image') ? $request->file('cover_image')->store('products', 'public') : $product->cover_path,
        ]);

        return redirect()->back()->with('success', 'The product has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        \Storage::disk('public')->delete($product->cover_path);

        $product->delete();

        return redirect(route('admin'))->with('success', 'The product has been removed');
    }
}
