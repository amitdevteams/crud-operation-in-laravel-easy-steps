<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Log;
use PDF;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));

    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request){
        $product = new Product;
        $product->product_type = $request->product_type;
        $product->productname = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_quantity = $request->product_quantity;
        $product->product_color = $request->product_color;
        $product->product_price = $request->product_price;
        $product->save();
        return redirect('/home');
    }

    public function edit($id){
        $products = Product::find($id);
        return view('products.edit', compact('products'));
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->product_type = $request->product_type;
        $product->productname = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_quantity = $request->product_quantity;
        $product->product_color = $request->product_color;
        $product->product_price = $request->product_price;
        // log::info("price me kya aa rha hai".$product->product_price);
        $product->save();
        return redirect('/home');
    }

    public function delete(Request $request){
        $product = Product::find($request->id);
        $product->delete();
        return redirect('/home');

    }

    public function downloadPDF($id){
        $user = Product::find($id);
        log::info("user id aa rha hai".$user->id);
        $pdf = PDF::loadView('pdf', compact('user'));

        return $pdf->download('invoice.pdf');
    }


}
