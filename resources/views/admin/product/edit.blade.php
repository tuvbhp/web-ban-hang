@extends('homes.master')
@section('title','Edit Product')
@section('css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('vendor/add/add.css')}}" rel="stylesheet"/>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('homes.content-header',['name'=> 'Product','key'=>'Edit'])
        <form method="post" action="{{route('update.product', $product->id)}}" enctype="multipart/form-data">
            <div class="content">
                <div class="col-sm-6">

                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" placeholder="Nhập Tên Sản Phẩm" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="integer" class="form-control" placeholder="Nhập Giá Sản Phẩm" name="price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh Đại Diện</label>
                        <input type="file" class="form-control-file" name="feature_image_path">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh Chi Tiết</label>
                        <input type="file" multiple class="form-control-file" name="image_path[]">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Chọn Danh Mục Sản Phẩm</label>
                        <select class="form-control select2_init" name="category_id">
                            <option value="">Chọn danh mục cha</option>
                            {!! $htmlOption !!}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Chọn Tags Sản Phẩm</label>
                        <select name="tags[]" class="form-control tags_select" multiple="multiple">
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nhập Nội Dung</label>
                        <textarea type="text" class="form-control tinymce_editor_init" placeholder="Nhập Nội Dung"
                                  name="content" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary m-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('vendor/add/add.js')}}"></script>
@endsection
