<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\SanPham;
use Session;
use DB;

class CheckoutAdminController extends Controller
{
    public function kt(){
        $admin_id=Session::get('status');
       if($admin_id){
        return redirect::to('/panel/index');
       }
       else{
        return redirect::to('/panel/login')->send();
       }
    }
      

        public function login()
        {
            return view('admin.login.login');
        }

        public function register()
        {
            return view('admin.login.register');
        }

        public function index()
        {
            $this->kt();
            $sanphams = SanPham::all();
            return view('admin.sanpham.index', compact('sanphams'));
        }

        public function trangchu(Request $request)
        {
            $email=$request->admin_email;
            $password=md5($request->admin_password);
            $status=$request->admin_status;
            $result=DB::table('admin')->where('email',$email)->where('password',$password)->where('status',$status)->first();

            if($result){
                
                Session::put('id_admin',$result->id);
                Session::put('status',$result->status);
                Session::put('hoten',$result->hoten);
                return Redirect::to('/panel/index');
            }else{
                Session::put('message','Sai tài khoản hoặc mật khẩu');
                return Redirect::to('/panel/login');
            }
          
        }


        public function logout()
        {
            $this->kt();
            Session::flush();
            Session::put('status',null);
            Session::put('id_admin',null);
            Session::put('hoten',null);
            return Redirect::to('/panel/login');
         
        }

        public function createAccount(Request $request)
        {
            $data=array();
            $data['hoten']=$request->hoten;
            $data['diachi']=$request->diachi;
            $data['sdt']=$request->sdt;
            $data['email']=$request->email;
            $data['password']=md5($request->password);
            $data['loai']=$request->loai;
            $data['trangthai']=$request->trangthai;
            $data['status']=$request->status;
            $customer_id=Admin::insertGetId($data);
            Session::put('id_admim',$customer_id);
            Session::put('status',$request->status);
            Session::put('hoten',$request->hoten);
            return Redirect::to('/panel/index');
        }
        
    
}
