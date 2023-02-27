<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     //Product::create(
    //[
       // 'name'=>$request->input('name'),
       // 'description'=>$request->input('description'),
        //'price'=>$request->input('price'),
       // 'img'=>$request->has('img') ? $request->file('img')->store('public/products') : 'img/default.jpg',
      //    'user_id'=>Auth::user()->id
      //  ]
//);

 $product=Auth::user()->products()->create(
    [
     'name'=>$request->input('name'),
        'description'=>$request->input('description'),
        'price'=>$request->input('price'),
        'img'=>$request->has('img') ? $request->file('img')->store('public/products') : 'img/default.jpg',
          'user_id'=>Auth::user()->id

]);
      return redirect()->route('product.index', compact('product'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
    public function getProductByUser(User $user)
    {
$user = User::find($user->id);
$products=$user->products;
return view('product/productUser', compact('products'));

    }
}
