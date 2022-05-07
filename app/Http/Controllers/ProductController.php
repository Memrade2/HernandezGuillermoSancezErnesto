<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = auth()->user()->products;
        
        $products =Product::all();
        return view('products.index')->with('products',$products);
        //return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = DB::table('sellers')->get()->pluck('user_id','seller_id');
        return view('products.create')->with('sellers', $sellers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'productName' => 'required|min:5|max:50',
            'description' => 'required|min:5|max:255',
            'price' => 'required',
            'stok' => 'required',
            'garanty' => 'required|min:5|max:10',
            'seller_id' => 'required',
        ]);

        DB::table('products')->insert([
            'productName' => $data['productName'],
            'description' => $data['description'],
            'price' => $data['price'],
            'stok' => $data['stok'],
            'garanty' => $data['garanty'],
            'seller_id' => $data['seller_id'],
        ]);

        /*auth()->user()->products()->create([
            'productName' => $data['productName'],
            'description' => $data['description'],
            'price' => $data['price'],
            'stok' => $data['stok'],
            'garanty' => $data['garanty'],
            'seller_id' => $data['seller_id'],
        ]);
        $products=auth()->user()->products;*/
        return view('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $seller = Seller::all(['seller_id','user_id']);
        return view('products.edit', compact('seller', 'product'));
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
        $data = request()->validate([
            'productName' => 'required|min:5|max:50',
            'description' => 'required|min:5|max:255',
            'price' => 'required',
            'stok' => 'required',
            'garanty' => 'required|min:5|max:10',
            'seller_id' => 'required',
        ]);
        
        $product->productName = $data['productName'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->stok = $data['stok'];
        $product->garanty = $data['garanty'];
        $product->seller_id = $data['seller_id'];

        $product->save();
        $products=auth()->user()->products;
        return view('products.index')->with('products',$products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
