<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\HoaDon;
use App\Models\SanPham;
use App\Models\LoaiSP;
use Session;
use DB;
class CheckoutController extends Controller
{
    public function login_checkout(){   
        return view('user.pages.login');
    }

    public function logout_checkout(){   
       Session::flush();
       return Redirect::to('/index');
    }

     public function register(){   
        return view('user.pages.register');
    }

    public function add_user(Request $request){

        $loai='user';
        $trangthai='active';
            $data=array();
            $data['hoten']=$request->HoTen;
            $data['diachi']=$request->DiaChi;
            $data['sdt']=$request->SDT;
            $data['email']=$request->Email;
            $data['password']=md5($request->Password);
            $data['loai']=$loai;
            $data['trangthai']=$trangthai;
            $customer_id=User::insertGetId($data);
            Session::put('id',$customer_id);
            Session::put('hoten',$request->HoTen);
            return Redirect::to('/checkout');
    }

    public function add_user_shop(Request $request){

        $loai='user';
        $trangthai='active';
            $data=array();
            $data['hoten']=$request->HoTen;
            $data['diachi']=$request->DiaChi;
            $data['sdt']=$request->SDT;
            $data['email']=$request->Email;
            $data['password']=md5($request->Password);
            $data['loai']=$loai;
            $data['trangthai']=$trangthai;
            $customer_id=User::insertGetId($data);
            Session::put('id',$customer_id);
            Session::put('hoten',$request->HoTen);
            return Redirect::to('/index');
    }
    public function index(){

        $latesproducts = SanPham::where('DanhMuc',1)->paginate(3);
        $newproducts = SanPham::where('DanhMuc',3)->paginate(3);
        return view('user.pages.index',compact('latesproducts','newproducts'));
    }


    public function checkout(){

        return view('user.pages.checkout');
    }

    
    public function save_checkout_customer(Request $request){

        

        $data=array();
        $data['user_id']=$request->id;
        $data['trangthai']=$request->trangthai;
        $data['hoten']=$request->hoten;
        $data['sdt']=$request->sdt;
        $data['diachi']=$request->diachi;
        $data['thanhtien']=$request->tongtien;
      
        
        $hoadon_id=HoaDon::insertGetId($data);
        Session::put('id',$hoadon_id);

        return Redirect::to('/bill');
    }

    public function bill(){
        $hoadons = HoaDon::all();
        return view('user.pages.bill', compact('hoadons'));
       
    }

    public function login_customer(Request $request){

        $email=$request->Name;
        $password=md5($request->Password);
        $result=DB::table('users')->where('email',$email)->where('password',$password)->get();

        if($result){
            Session::put('id',$result->id);
            return Redirect::to('/checkout');
        }else{
            return Redirect::to('/login-checkout');
        }
      
    }

    public function login_customer_shop(Request $request){

        $email=$request->Name;
        $password=md5($request->Password);
        $result=DB::table('users')->where('email',$email)->where('password',$password)->first();

        if($result){
            Session::put('id',$result->id);
            return Redirect::to('/index');
        }else{
            return Redirect::to('/login-checkout');
        }
      
    }
}
