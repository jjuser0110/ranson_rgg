<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserCart;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Order;
use App\Models\OrderItem;
use App\Exceptions\Failed;
use Exception;
use Carbon\Carbon;

class CheckoutController extends Controller
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

    public function create(Request $request)
    {
        try{
            DB::beginTransaction();
            if(!Auth::user()){
                throw new Failed('Please login first.');
            }

            $user = User::where('id',Auth::user()->id)->first();
            if(!isset($user)){
                throw new Failed('Invalid user.');
            }

            // PRODUCT
            if(!isset($request->product)){
                throw new Failed('Undefined product, please try again.');
            }
            $product = Product::where('id',$request->product)->first();
            if(!isset($product) || $product->status == 0){
                throw new Failed('Selected product is no available.');
            }

            // VARIANT
            if(!isset($request->variant)){
                throw new Failed('Undefined product option, please try again.');
            }
            $variant = ProductVariant::where('product_id',$product->id)->where('id',$request->variant)->first();
            if(!isset($variant) || $variant->status == 0){
                throw new Failed('Selected product is no longer available.');
            }
            
            // QUANTITY
            if(!isset($request->quantity)){
                throw new Failed('Undefined quantity, please try again.');
            }
            if($request->quantity > $variant->quantity){
                throw new Failed('Selected item only have '.$varaint->quantity.' in stock. Please adjust your quantity.');
            }
            
            $total_amount = 0;
            $total_discount = 0;

            $price = $variant->price;
            $discount = $variant->discount > 0 ? ($price/100) * $variant->discount : 0;
            $total_amount = $price * $request->quantity;
            $total_discount = $discount * $request->quantity;
            
            $order = Order::create([
                'code'=>$this->create_order_code().str_pad($product->id, 5, '0', STR_PAD_LEFT),
                'user_id'=>$user->id,
                'amount_before_discount'=>$total_amount,
                'amount_after_discount'=>$total_amount - $total_discount,
                'discount_amount'=>$total_discount,
                'status'=>'pending'
            ]);

            // PRODUCT AND VARIANT NAME FOR RECORD PURPOSE, VARIANT ID FOR ROLLBACK QUANTITY
            $order_items = OrderItem::create([
                'order_id'=>$order->id,
                'product_id'=>$product->id,
                'product_name'=>$product->name,
                'variant_name'=>$variant->name,
                'variant_id'=>$variant->id,
                'quantity'=>$request->quantity,
                'amount'=>$variant->price,
                'discount'=>$variant->discount,
                'image'=>$product->short_name."/".$variant->image
            ]);

            $variant->update(['quantity'=>$variant->quantity - $request->quantity]);
            DB::commit();
            return response()->json(['success'=>true,'message'=>'Checkout','order'=>$order->code]); 
        }
        catch(Failed $e){
            DB::rollback();
            return response()->json(['success'=>false,'message'=>$e->getMessage()]);

        }
        catch(Exception $e){
            DB::rollback();
            return response()->json(['success'=>false, 'message'=>$e->getMessage()]);
            return response()->json(['success'=>false,'message'=>'There is something wrong, please try again']);
      
        }
    }

    public function create_multiple(Request $request)
    {
        try{
            DB::beginTransaction();
            if(!Auth::user()){
                throw new Failed('Please login first.');
            }

            $user = Auth::user();
            if(!isset($user)){
                throw new Failed('Invalid user.');
            }

            if(!is_array($request->items)){
                throw new Failed('Invalid items');
            }
            
            if(count($request->items) < 1){
                throw new Failed('Please atleast select one item.');
            }

            $items = UserCart::whereIn('id',$request->items)->where('user_id', Auth::user()->id)->where('status','pending')->get();

            if ($items->count() !== count($request->items)) {
                throw new Failed('Some of the selected items are not valid.');
            }

            $total_amount = 0;
            $total_discount = 0;

            $code = 'M'.count($items);
            $order = Order::create([
                'code'=>$this->create_order_code().str_pad($code, 5, '0', STR_PAD_LEFT),
                'user_id'=>$user->id,
                'amount_before_discount'=>$total_amount,
                'amount_after_discount'=>$total_amount - $total_discount,
                'discount_amount'=>$total_discount,
                'status'=>'pending'
            ]);

            foreach($items as $item){
                $variant = ProductVariant::where('id',$item->variant_id)->first();
                if(!isset($variant) || $variant->status == 0 || $variant->quantity == 0){
                    throw new Failed($variant->name.' is no longer available.');
                }
                if($variant->quantity < $item->quantity){
                    throw new Failed($variant->name.' only left '.$variant->quantity.' stocks.');
                }

                $product = Product::where('id',$item->product_id)->first();
                if(!isset($product) || $product->status == 0){
                    throw new Failed($product->name.' is no longer available.');
                }

                $price = $variant->price;
                $discount = $variant->discount > 0 ? ($price/100) * $variant->discount : 0;
                $total_amount += $price * $item->quantity;
                $total_discount += $discount * $item->quantity;
                $order_items = OrderItem::create([
                    'order_id'=>$order->id,
                    'product_id'=>$product->id,
                    'product_name'=>$product->name,
                    'variant_name'=>$variant->name,
                    'variant_id'=>$variant->id,
                    'quantity'=>$item->quantity,
                    'amount'=>$variant->price,
                    'discount'=>$variant->discount,
                    'image'=>$product->short_name."/".$variant->image
                ]);
                $variant->update(['quantity'=>$variant->quantity - $item->quantity]);
            }

            $order->update([
                'amount_before_discount'=>number_format($total_amount , 2, '.', ''),
                'amount_after_discount'=>number_format($total_amount - $total_discount , 2, '.', ''),
                'discount_amount'=>number_format($total_discount , 2, '.', ''),
            ]);

            DB::commit();
            return response()->json(['success'=>true,'message'=>'Checkout','order'=>$order->code]); 
        }
        catch(Failed $e){
            DB::rollback();
            return response()->json(['success'=>false,'message'=>$e->getMessage()]);

        }
        catch(Exception $e){
            DB::rollback();
            return response()->json(['success'=>false, 'message'=>$e->getMessage()]);
            return response()->json(['success'=>false,'message'=>'There is something wrong, please try again']);
        }
    }

    public function single(Request $request)
    {
        try{
            // $product = Product::where('short_name',$request->product)->first();
            // if(!isset($product) || $product->status == 0){
            //     throw new Failed('This product is no longer available.');
            // }

            // $others = Product::where('id', '!=', $product->id)->select('name','short_name','image')->inRandomOrder()->limit(10)->get();
            // $variants = ProductVariant::where('product_id',$product->id)->where('status',1)->get();
            $order = Order::where('code',$request->order)->where('status','pending')->where('user_id',Auth::user()->id)->first();
            if(!isset($order)){
                throw new Failed('Order not found.');
            }
            $order_items = OrderItem::where('order_id',$order->id)->select('product_id','product_name','variant_name','quantity','image','discount','amount')->get();
            $products = [];
            foreach ($order_items as $order_item) {
                // Check if the product name already exists in the items array
                if (!isset($products['p'.$order_item->product_id])) {
                    // If not, initialize it as an array
                    $products['p'.$order_item->product_id] = ['name'=>$order_item->product_name,'items'=>[]];
                }
            
                // Add the current order item to the respective product_name group
                $products['p'.$order_item->product_id]['items'][] = $order_item->toArray();
            }


            return view('checkout')->with('order',$order)->with('products',$products); 
        }
        catch(Failed $e){
            return view('checkout')->with('error',$e->getMessage());
        }
        catch(Exception $e){
            return view('checkout')->with('error',$e->getMessage());
            return view('checkout')->with('error','There is something wrong, please try again.');

        }
    }

}
