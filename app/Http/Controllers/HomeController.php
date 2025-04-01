<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ContactForm;
use App\Exceptions\Failed;
use App\Jobs\ReceivedInquiryJob;
use Exception;

class HomeController extends Controller
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
    public function index()
    {
        $products = Product::where('status', 1)
        ->select('products.id', 'products.name', 'products.image', 'products.short_name', 'products.label')
        ->addSelect(['lowest_price' => ProductVariant::selectRaw('MIN(price)')
            ->whereColumn('product_variants.product_id', 'products.id')
        ])
        ->get();

        return view('index')->with('products',$products);
    }

    public function submit_contact(Request $request)
    {
        try{
            if(!$request->has('name')){
                throw new Failed('Name is required');
            }
            if(strlen($request->input('name')) < 3 || strlen($request->input('name')) > 100){
                throw new Failed('Invalid name '.$request->input('name'));
            }
            if(!$request->has('email')){
                throw new Failed('Email is required');
            }
            if($request->has('contact_no') && !is_numeric($request->input('contact_no'))){
                throw new Failed('Invalid contact number.');
            }
            if(!$request->has('message') || strlen($request->input('message') < 10)){
                throw new Failed('Message too short.');
            }
            
            ContactForm::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'contact_no'=>$request->input('contact_no'),
                'message'=>$request->input('message')
            ]);

            dispatch(new ReceivedInquiryJob($request->input('name'),  $request->input('message'), $request->input('email')))->onQueue('emails');
            return response()->json(['success'=>true,'message'=>'Thank you for reaching out! We have received your message and will get back to you shortly.']);


        }
        catch(Failed $e){
            return response()->json(['success'=>false,'message'=>$e->getMessage()]);
        }
        catch(Exception $e){
            //return response()->json(['success'=>false,'message'=>$e->getMessage()]);
            return response()->json(['success'=>false,'message'=>'There is something wrong, please try again.']);
        }
        $products = Product::where('status',1)->select('id','name','image','short_name')->get();
        return view('index')->with('products',$products);
    }
}
