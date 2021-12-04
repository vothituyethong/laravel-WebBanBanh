@extends('admin.login.layoutlogin')
@section('content')
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5" style="text-align:center;">
                                    <div class="text-center" >
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php
                                    $message=Session::get('message');
                                    if($message){
                                       
                                        echo '<span class="text-alert" style="color: red;font-size: 17px;width: 100%;font-weight: bold;">'.$message.'</span>' ;
                                        Session::put($message,null);
                                  
                                    }
                                        
                                    ?>
                                    <form action="{{URL::to('/panel/trangchu')}}" method="post" class="user">
                                    {{csrf_field()}}
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Enter Email Address..." name="admin_email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                               placeholder="Password" name="admin_password">
                                               <input type="hidden" class="form-control form-control-user"
                                                name="admin_status" value="1">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>

                                        <input class="btn btn-primary btn-user btn-block" type="submit" class="form-control" value="Log in"> </input>
                                       
                                       
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{URL::to('/panel/register')}}">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    @stop