<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Session;

class UsersController extends Controller
{
    public function __construct()
    {
       
        $this->viewprefix='admin.users.';
        $this->viewnamespace='admin/users';
    }


    public function kt(){

        $admin_id=Session::get('status');
       if($admin_id){
        return redirect::to('/panel/users');
       }
       else{
        return redirect::to('/panel/login')->send();
       }
    }
    public function index()
    {
         $this->kt();
        $users = User::all();
        return view($this->viewprefix.'index', compact('users'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
   **/

    

    public function store(Request $request)
    {
        //
        
        $user= new User();
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'hoten' => 'required',
            'diachi' => 'required',
            'sdt' => 'required',
            'loai' => 'required',
            'trangthai'=>'required',
           
        
        ]);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->hoten=$request->hoten;
        $user->diachi=$request->diachi;
        $user->sdt=$request->sdt;
        $user->email=$request->email;
        $user->loai=$request->loai;
        $user->trangthai=$request->trangthai;
       
        
        //if(Category::create($request->all()))
        if($hoadon->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('users.index');
             
    }

    public function show(User $user)
    {
        //
       
    }

    public function edit(User $user)
    {
        $this->kt();
        return view($this->viewprefix.'edit')->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        $data=$request->validate([
            'email' => 'required',
            'password' => 'required',
            'hoten' => 'required',
            'diachi' => 'required',
            'sdt' => 'required',
            'loai' => 'required',
            'trangthai'=>'required',
           
        ]);    
        
        //if(Category::create($request->all()))
        if($user->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('users.index');
    }


    public function destroy( User $user)
    {
        if($user->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('users.index');
    }
}
