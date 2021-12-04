@extends('admin.loaisp.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{route('hoadon.update',$hoadon->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Họ Tên </label>
                                        <input type="text" class="form-control" name="hoten" value="{{$hoadon->hoten}}" >
                                    </div>
                                </div>

                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Địa Chỉ</label>
                                        <input type="text" class="form-control" name="diachi" value="{{$hoadon->diachi}}">
                                    </div>
                                </div>

                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Số Điện Thoại </label>
                                        <input type="text" class="form-control" name="sdt" value="{{$hoadon->sdt}}" >
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Tổng Tiền</label>
                                        <input type="text" class="form-control" name="thanhtien" value="{{$hoadon->thanhtien}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <input type="text" name="trangthai" class="form-control" value="{{$hoadon->trangthai}}">
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
