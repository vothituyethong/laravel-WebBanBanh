<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\DanhMuc;

use Session;

class DanhMucController extends Controller
{
    public function __construct()
    {
        
        $this->viewprefix='admin.danhmuc.';
        $this->viewnamespace='admin/danhmuc';
    }

    public function kt(){
        $admin_id=Session::get('status');
       if($admin_id){
        return redirect::to('/panel/danhmuc');
       }
       else{
        return redirect::to('/panel/login')->send();
       }
    }

    public function index()
    {
        $this->kt();
        $danhmucs = DanhMuc::all();
        return view($this->viewprefix.'index', compact('danhmucs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
   **/

    public function create()
    {
        $this->kt();
        return view($this->viewprefix.'create');
    }

    public function store(Request $request)
    {
        //
        $danhmuc= new DanhMuc();
        $this->validate($request, [
            'TenDanhMuc'=>'required',
            'TrangThai' => 'required',
           
        ]);
        $danhmuc->TenDanhMuc=$request->TenDanhMuc;
        $danhmuc->TrangThai=$request->TrangThai;
        
        //if(Category::create($request->all()))
        if($danhmuc->save())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('danhmuc.index');
    }

    public function edit(DanhMuc $danhmuc)
    {
        $this->kt();
        return view($this->viewprefix.'edit')->with('danhmuc', $danhmuc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DanhMuc  
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, DanhMuc $danhmuc)
    {
        $data=$request->validate([
            
            'TenDanhMuc' => 'required',
            'TrangThai' => 'required',
           
        ]);    
        
     
        
        //if(Category::create($request->all()))
        if($danhmuc->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('danhmuc.index');
    }
    public function destroy(DanhMuc $danhmuc)
    {
        if($danhmuc->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('danhmuc.index');
    }
   
}
