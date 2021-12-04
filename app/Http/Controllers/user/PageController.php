<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\LoaiSP;
use App\Models\User;
use App\Models\DanhMuc;
use Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Hash;
class PageController extends Controller
{
    public function __construct()
    {
        $this->viewprefix='user.pages.';
        $this->viewnamespace='user/page';
    }
    public function index()
    {
        
        $latesproducts = SanPham::where('DanhMuc',1)->paginate(3);
        $newproducts = SanPham::where('DanhMuc',3)->paginate(3);
        return view($this->viewprefix.'index',compact('latesproducts','newproducts'));
    }

    public function single($id)
    {
        
        $sanpham = SanPham::where('id',$id)->first();
        $sanpham_lienquan=SanPham::where('MaLoai', $sanpham->MaLoai)->paginate(4);
        return view($this->viewprefix.'single',compact('sanpham','sanpham_lienquan'));
    }

    public function product(){

    $sanphams = SanPham::where('TrangThai',1)->get();
    return view($this->viewprefix.'product', compact('sanphams'));
    }


    public function product1($id){

        
        $danhmuc = DanhMuc::where('id',$id)->get();
        $sanphams = SanPham::where('DanhMuc',$id)->get();
        return view($this->viewprefix.'product1', compact('sanphams','danhmuc'));
        }

    public function product2($id){
        $loaisp = LoaiSP::where('id',$id)->get();
        $sanphams = SanPham::where('MaLoai',$id)->get();
        return view($this->viewprefix.'product2', compact('sanphams','loaisp'));
        }

        public function contact(){
            return view($this->viewprefix.'contact');
        }

        public function about(){
            return view($this->viewprefix.'about');
        }
   
}
