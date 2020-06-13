<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category =Category::all()->take(4);
        $FeatureProduct =Product::where('is_featured',1)->get();
        $Productrating = Product::find(1);
        // dd($Productrating);
        return view('welcome')->with('FeatureProducts',$FeatureProduct)->with('product1',$Productrating)->with('categories',$category);
    }

    public function shop(){
        $category =Category::all();
        $product = Product::all();
        return view('shop')->with('categoreis',$category)->with('products',$product);
    }

    public function category($id){
        $category =Category::all();
        $product = Product::where('category_id',$id)->get();
        // dd($product);
        return view('shop')->with('categoreis',$category)->with('products',$product);
    }
}
