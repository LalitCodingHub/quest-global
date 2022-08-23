<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addproducttocart(request $request){
        $product_id = $request->prod_id;
        $product_qty = $request->prod_qty;
        $prod_check = Addproduct::where('id',$product_id)->first();
        if($prod_check){

            $prod_ablty = Cart::where('prod_id',$product_id)->first();
            if($prod_ablty){
                $prod_ablty->prod_qty = $prod_ablty->prod_qty+1;
                $prod_ablty->save();
            }else{
                $cartItem = new Cart();
                $cartItem->prod_id = $product_id;
                $cartItem->prod_qty = $product_qty;
                $cartItem->save();
            }
            return response()->json(['status'=> $prod_check->name." added to cart"]);
        }
        
    }
    public function addtocart(){
        $cartproduct = Cart::with('productDetail','productDetail.Productimage')->get();
        return view('products.addtocart',compact('cartproduct'));
    }
}