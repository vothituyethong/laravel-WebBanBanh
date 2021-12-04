<?php

namespace App\Http\Controllers\admin;

use App\Models\Nhacungcap;
use App\Models\LoaiSP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Session;

class NhaCungCapController extends Controller
{
    public function __construct()
    {
        
        $this->viewprefix='admin.nhacungcap.';
        $this->viewnamespace='panel/nhacungcap';
    }

    public function kt(){
        $admin_id=Session::get('status');
       if($admin_id){
        return redirect::to('/panel/nhacungcap');
       }
       else{
        return redirect::to('/panel/login')->send();
       }
    }

    public function index()
    {
        $this->kt();
        $nhacungcap = Nhacungcap::all();
        return view($this->viewprefix.'index',compact('nhacungcap'));
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
        //
        $nhacungcap = new Nhacungcap;
        $this->validate($request, [
            'tenncc'=>'required',
            'diachi'=>'required',
            'trangthai'=>'required'
        ]);
        $nhacungcap->tenncc=$request->tenncc;
        $nhacungcap->diachi=$request->diachi;
        $nhacungcap->trangthai=$request->trangthai;
        if($nhacungcap->save())
        Session::flash('message','Create NHACUNGCAP successfully');
        else
        Session::flash('message','failure!!!');
        return redirect()->route('nhacungcap.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function show(Nhacungcap $nhacungcap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function edit(Nhacungcap $nhacungcap)
    {
        $this->kt();
        return view($this->viewprefix.'edit')->with('nhacungcap', $nhacungcap);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nhacungcap $nhacungcap)
    {
        //
        $this->validate($request, [
            'tenncc'=>'required',
            'diachi'=>'required',
            'trangthai'=>'required'
        ]);
        if($nhacungcap->update($request->all()))
        Session::flash('message','Update successfully!');
        else
        Session::flash('message','Update fail!');
        return redirect()->route('nhacungcap.index');

    }

    public function destroy(Nhacungcap $nhacungcap)
    {
        //
        if($nhacungcap->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('nhacungcap.index');
    }
}
