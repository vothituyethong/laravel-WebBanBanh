<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\SanPham;
use App\Models\LoaiSP;
use Session;

class SanPhamController extends Controller
{
    public function __construct()
    {
        //$this->middleware('adminLogin');
        $this->viewprefix='admin.sanpham.';
        $this->viewnamespace='admin/sanpham';
    }

    public function kt(){
        $admin_id=Session::get('status');
       if($admin_id){
        return redirect::to('/panel/sanpham');
       }
       else{
        return redirect::to('/panel/login')->send();
       }
    }
    public function index()
    {
        $this->kt();
        $sanphams = SanPham::all();
        return view($this->viewprefix.'index', compact('sanphams'));
    }

    public function create()
    {
        $this->kt();
        return view($this->viewprefix.'create');
    }

    public function imageUpload(Request $request){
        if($request->hasFile('Image')){
            if($request->file('Image')->isValid()){
                $request->validate(['Image'=>'required|image|mimes:jpeg,jpg,png|max:2048',]);
                $imageName = time().'.'.$request->Image->extension();
                $request->Image->move(public_path('image'),$imageName);
                return $imageName;
            }
        }
        return 'x';
    }
    public function store(Request $request)
    {
        //
        $sanpham= new SanPham;
        $this->validate($request, [
            'TenSP' => 'required',
            'MaLoai' => 'required',
            'DanhMuc' => 'required',
            'Gia' => 'required',
            'GiaMoi' => 'required',
            'Image' => 'required',
            'Size' => 'required',
            'SoLuong'=>'required',
            'MoTa'=>'required',
            'TrangThai'=>'required',
        ]);
        $sanpham->TenSP=$request->TenSP;
        $sanpham->MaLoai=$request->MaLoai;
        $sanpham->DanhMuc=$request->DanhMuc;
        $sanpham->Gia=$request->Gia;
        $sanpham->GiaMoi=$request->GiaMoi;
        $sanpham->Image=$this->imageUpload($request);
        $sanpham->Size=$request->Size;
        $sanpham->SoLuong=$request->SoLuong;
        $sanpham->MoTa=$request->MoTa;
        $sanpham->TrangThai=$request->TrangThai;
        //if(Category::create($request->all()))
        if($sanpham->save())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('sanpham.index');
    }

    public function edit(SanPham $sanpham)
    {
        $this->kt();
        return view($this->viewprefix.'edit')->with('sanpham', $sanpham);
    }

    public function update(Request $request, SanPham $sanpham)
    {
        $data=$request->validate([
            'TenSP' => 'required',
            'MaLoai' => 'required',
            'DanhMuc' => 'required',
            'Gia' => 'required',
            'GiaMoi' => 'required',
            'Size' => 'required',
            'SoLuong'=>'required',
            'MoTa'=>'required',
            'TrangThai'=>'required',
        ]);    
        
        $data['Image']=$this->imageUpload($request);
        
        //if(Category::create($request->all()))
        if($sanpham->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('sanpham.index');
    }
    public function destroy(SanPham $sanpham)
    {
        if($sanpham->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('sanpham.index');
    }

  
}