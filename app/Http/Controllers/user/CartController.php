<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\SanPham;
use Session;
use Cart;

session_start();



class CartController extends Controller
{
 // public function index(){
  // $sanphams = SanPham::all();
  // return view('user.pages.product', compact('sanphams'));
 // }



  public function save_cart(Request $request){
    $productId=$request->productid_hidden;
    $quantity=$request->qty;

    $product_info=SanPham::where('id',$productId)->first();

   $data['id']=$product_info->id;
   $data['qty']=$quantity;
   $data['name']=$product_info->TenSP;
   $data['price']=$product_info->GiaMoi;
   $data['weight']='123';
   $data['options']['image']=$product_info->Image;
    Cart::add($data);
   return Redirect::to('/show_cart');
   
  }

  public function show_cart(){

    return view('user.pages.showcart');
  }

  public function delete_to_cart($rowId){
    Cart::update($rowId,0);
    return Redirect::to('/show_cart');
  }

  public function update_cart_quantity(Request $request){

   $rowId=$request->rowId_cart;
   $qty=$request->cart_quantity;
   Cart::update($rowId,$qty);
   return Redirect::to('/show_cart');
  }

   
}
