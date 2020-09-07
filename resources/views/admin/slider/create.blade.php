@extends('homes.master')
@section('title','Slider')
@section('css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('vendor/add/add.css')}}" rel="stylesheet"/>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('homes.content-header',['name'=> 'Slider','key'=>'Create'])
        <form method="post" action="{{route('store.slider')}}" enctype="form-data">
            <div class="content">
                <div class="col-sm-6">

                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Slider Name</label>
                        <input type="text" class="form-control" placeholder="Nhập Tên Sản Phẩm" name="name">
                    </div>
                    <div class="form-group">
                        <label>Nhập Nội Dung</label>
                        <textarea type="text" class="form-control" placeholder="Nhập Nội Dung"
                                  name="content" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="feature_image_path">Ảnh Đại Diện</label>
                        <input type="file" class="form-control-file" name="feature_image_path">
                    </div>

                </div>
                <div class="col-md-12">

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
