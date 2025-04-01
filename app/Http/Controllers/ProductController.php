<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Exceptions\Failed;
use Exception;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function view(Request $request)
    {
        try{
            $product = Product::where('short_name',$request->product)->first();
            if(!isset($product) || $product->status == 0){
                throw new Failed('This product is no longer available.');
            }

            $others = Product::where('id', '!=', $product->id)->select('name','short_name','image')->inRandomOrder()->limit(10)->get();
            $variants = ProductVariant::where('product_id',$product->id)->where('status',1)->get();
    
            return view('product.single')->with('product',$product)->with('variants',$variants)->with('others',$others); 
        }
        catch(Failed $e){
            return view('product.single')->with('error', $e->getMessage());
        }
        catch(Exception $e){
            return view('product.single')->with('error', 'There is something wrong, please try again.');
        }
    }

    public function search(Request $request){
        try{
            $products = Product::where('name','like','%'.$request->input('query').'%')->select('name','short_name','image')->get();
            return response()->json(['result'=>$products]);
        }
        catch(Expection $e){
            return response()->json(['result'=>[]]);
        }
    }
}
