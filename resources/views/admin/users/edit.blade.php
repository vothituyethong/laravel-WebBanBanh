@extends('admin.users.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                            <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" value="{{$user->password}}" >
                                    </div>
                                </div>

                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Họ Tên </label>
                                        <input type="text" class="form-control" name="hoten" value="{{$user->hoten}}" >
                                    </div>
                                </div>

                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Địa Chỉ</label>
                                        <input type="text" class="form-control" name="diachi" value="{{$user->diachi}}">
                                    </div>
                                </div>

                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Số Điện Thoại </label>
                                        <input type="text" class="form-control" name="sdt" value="{{$user->sdt}}" >
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Loại</label>
                                        <input type="text" class="form-control" name="loai" value="{{$user->loai}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <input type="text" name="trangthai" class="form-control" value="{{$user->trangthai}}">
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
@stop
