@extends('admin.login.layoutlogin')
@section('content')
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="{{URL::to('/panel/createAccount')}}" method="post">
                            {{csrf_field()}}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" 
                                            placeholder="Họ và tên" name="hoten">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" 
                                            placeholder="Địa chỉ" name="diachi">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        placeholder="Email Address" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                             placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                            <input type="hidden" class="form-control form-control-user" name="loai" value="admin">
                                             <input type="hidden" class="form-control form-control-user"name="trangthai" value="active">
                                             <input type="hidden" class="form-control form-control-user" name="status" value="0">
                                        <input type="text" class="form-control form-control-user"
                                             placeholder="Số điện thoại" name="sdt">
                                    </div>
                                </div>
                                
                                <input class="btn btn-primary btn-user btn-block" type="submit" class="form-control" value="Register Account"> </input>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @stop