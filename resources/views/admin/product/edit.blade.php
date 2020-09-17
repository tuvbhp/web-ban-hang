@extends('homes.master')
@section('title', 'Products')
@section('css')
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/add/add.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('homes.content-header',['name'=> 'Product','key'=>'Edit'])
        <form method="post" action="{{ route('update.product', ['id' => $product->id]) }}" enctype="multipart/form-data">
            <div class="content">
                <div class="col-sm-6">

                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" placeholder="Nhập Tên Sản Phẩm" name="name"
                            value="{{ $product->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" class="form-control" placeholder="Nhập Giá Sản Phẩm" name="price"
                            value="{{ $product->price }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh Đại Diện</label>
                        <input type="file" class="form-control-file" name="feature_image_path">
                        <div class="col-md-12">
                            <div class="row-cols-2">
                                <img src="{{ $product->feature_image_path }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh Chi Tiết</label>
                        <input type="file" multiple class="form-control-file" name="image_path[]">
                        <div class="col-md-12 features_image_container">
                            <div class="row">
                                @foreach ($product->productImages as $productImageItem)
                                    <div class="col-md-3">
                                        <img class="image_detail_product" src="{{ $productImageItem->image_path }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
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
                            @foreach ($product->tags as $tagItem)
                                <option selected value="{{ $tagItem->id }}">{{ $tagItem->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nhập Nội Dung</label>
                        <textarea type="text" class="form-control tinymce_editor_init" placeholder="Nhập Nội Dung"
                            name="content" rows="6">{{ $product->content }} </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary m-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{ asset('vendor/add/add.js') }}"></script>
@endsection
