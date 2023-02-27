<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home()
    {

        $articles=Article::all()->sortDesc();
       // dd($articles->isNotEmpty());
        return view('welcome' , compact('articles'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function submit(Request $request){


        $name=$request->name;
        $email=$request->email;
        $body=$request->body;

        $user=compact('name', 'email', 'body');

        Mail::to($email)->send(new ContactMail($user));

        // dd($request->all(),$name, $email, $body ,$user);
        return redirect(route('homepage'))->with('message' ,'la tua mail è stata inviata.');
    }

    public function index()
    {

        $products=Product::all();
        return view ('product/index-product',compact('products'));
    }
}
