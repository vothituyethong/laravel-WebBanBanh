<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\HoaDon;
use Session;

class HoaDonController extends Controller
{
    public function __construct()
    {
       
        $this->viewprefix='admin.hoadon.';
        $this->viewnamespace='admin/hoadon';
    }


    public function kt(){

        $admin_id=Session::get('status');
       if($admin_id){
        return redirect::to('/panel/hoadon');
       }
       else{
        return redirect::to('/panel/login')->send();
       }
    }
    public function index()
    {
         $this->kt();
        $hoadons = HoaDon::all();
        return view($this->viewprefix.'index', compact('hoadons'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
   **/

    

    public function store(Request $request)
    {
        //
        
        $hoadon= new HoaDon();
        $this->validate($request, [
            'user_id' => 'required',
            'hoten' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
            'thanhtien' => 'required',
            'trangthai'=>'required',
        
        ]);
        $hoadon->user_id=$request->user_id;
        $hoadon->hoten=$request->hoten;
        $hoadon->sdt=$request->sdt;
        $hoadon->diachi=$request->diachi;
        $hoadon->thanhtien=$request->thanhtien;
        $hoadon->trangthai=$request->trangthai;
        
        //if(Category::create($request->all()))
        if($hoadon->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('hoadon.index');
             
    }

    public function show(HoaDon $hoadon)
    {
        //
       
    }

    public function edit(HoaDon $hoadon)
    {
        $this->kt();
        return view($this->viewprefix.'edit')->with('hoadon', $hoadon);
    }

    public function update(Request $request, Hoadon $hoadon)
    {
        $data=$request->validate([
            'hoten' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
            'thanhtien' => 'required',
            'trangthai'=>'required',
        ]);    
        
        //if(Category::create($request->all()))
        if($hoadon->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('hoadon.index');
    }


    public function destroy(HoaDon $hoadon)
    {
        if($hoadon->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('hoadon.index');
    }
   
}
