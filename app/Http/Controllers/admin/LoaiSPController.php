<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Nhacungcap;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\LoaiSP;
use Session;

class LoaiSPController extends Controller
{
    public function __construct()
    {
        
        $this->viewprefix='admin.loaisp.';
        $this->viewnamespace='panel/loaisp';
    }

    public function kt(){
        $admin_id=Session::get('status');
       if($admin_id){
        return redirect::to('/panel/loaisp');
       }
       else{
        return redirect::to('/panel/login')->send();
       }
    }

    public function index()
    {
        $this->kt();
        $loaisp = LoaiSP::all();
        return view($this->viewprefix.'index')->with('cates', $loaisp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->kt();
        return view($this->viewprefix.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loaisp = new LoaiSP();
        $this->validate($request, [
            'tenloai'=>'required',
            'nhacungcap'=>'required',
            'trangthai' => 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $loaisp->tenloai=$request->tenloai;
        $loaisp->nhacungcap=$request->nhacungcap;
        $loaisp->trangthai=$request->trangthai;
        if($loaisp->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('loaisp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiSP $loaisp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiSP $loaisp)
    {
        $this->kt();
        return view($this->viewprefix.'edit')->with('loaisp', $loaisp);
        // return view($this->viewprefix.'edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiSP $loaisp)
    {
        $this->validate($request, [
            'tenloai'=>'required',
            'nhacungcap'=>'required',
            'trangthai' => 'required',

        ]);
        if($loaisp->update($request->all()))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('loaisp.index');
    }
    
    public function destroy(LoaiSP $loaisp)
    {
        if($loaisp->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('loaisp.index');
    }
}
