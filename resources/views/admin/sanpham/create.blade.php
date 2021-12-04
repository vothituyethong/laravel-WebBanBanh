@extends('admin.sanpham.sidebar')
@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{route('sanpham.store')}}" method="POST"enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Tên Sản Phẩm </label>
                                        <input type="text" class="form-control" name="TenSP" placeholder="Tên Sản Phẩm" >
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Mã Loại</label>
                                        <input type="text" class="form-control" name="MaLoai" placeholder="Ma Loai">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Danh Mục </label>
                                        <input type="text" class="form-control" name="DanhMuc" placeholder="Danh Mục" >
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá</label>
                                        <input type="text" name="Gia" class="form-control" placeholder="Giá">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá mới</label>
                                        <input type="text" name="GiaMoi" class="form-control" placeholder="Giá mới">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                <div class="custom-file">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" name="Image" id="ful" class="custom-file-input" />
                                </div>
                                <div class="form-group">
                                    <img id="imgPre" src="{{asset('image/noimage.jpg')}}" alt="no img" class="img-thumbnail" />
                                    <p>
                                    <label for="ful"><i><u><b>Choose File</b></u></i></label>
                                    </p>
                                </div>
                                </div>
                                
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Size</label>
                                        <input type="text" name="Size" class="form-control" placeholder="Size">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số lượng</label>
                                        <input type="text" name="SoLuong" class="form-control" placeholder="Số lượng">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả</label>
                                        <input type="text" name="MoTa" class="form-control" placeholder="Mô tả">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <input type="text" name="TrangThai" class="form-control" placeholder="Trạng thái">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                    <button type="submit" class="btn btn-info btn-fill pull-right">Thêm</button>
                    {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>


    @stop
