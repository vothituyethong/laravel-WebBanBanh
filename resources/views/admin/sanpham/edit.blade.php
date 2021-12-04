@extends('admin.sanpham.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{route('sanpham.update',$sanpham->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Tên Sản Phẩm </label>
                                        <input type="text" class="form-control" name="TenSP" value="{{$sanpham->TenSP}}" >
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Mã Loại</label>
                                        <input type="text" class="form-control" name="MaLoai" value="{{$sanpham->MaLoai}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Danh Mục </label>
                                        <input type="text" class="form-control" name="DanhMuc" value="{{$sanpham->DanhMuc}}" >
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá</label>
                                        <input type="text" name="Gia" class="form-control" value="{{$sanpham->Gia}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá mới</label>
                                        <input type="text" name="GiaMoi" class="form-control" value="{{$sanpham->GiaMoi}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                <div class="custom-file">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" name="Image" id="ful" class="custom-file-input" />

                                </div>
                                <div class="form-group">
                                    <img id="imgPre" src="{{asset('image/'.$sanpham->Image)}}" alt="no img" class="img-thumbnail" />
                                    <p>
                                    <label  for="ful"><i><u><b>Choose File</b></u></i></label>
                                    </p>
                                </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Size</label>
                                        <input type="text" name="Size" class="form-control" value="{{$sanpham->Size}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số lượng</label>
                                        <input type="text" name="SoLuong" class="form-control" value="{{$sanpham->SoLuong}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả</label>
                                        <input type="text" name="MoTa" class="form-control" value="{{$sanpham->MoTa}}">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <input type="text" name="TrangThai" class="form-control" value="{{$sanpham->TrangThai}}">
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
