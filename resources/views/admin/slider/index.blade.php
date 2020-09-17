@extends('homes.master')
@section('title','List sliders')

@section('css')
<link rel="stylesheet" href="{{ asset('vendor/index/list.css') }}">
@endsection

@section('content')

    <div class="content">
        <div class="content-wrapper">
            @include('homes.content-header',['name'=>'Slider','key'=>'List'])
            <div class="col-md-12">
                <a href="{{route('create.slider')}}" class="btn btn-success float-right m-2"> Create New Slider </a>
            </div>
            <br>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Slider</th>
                        <th scope="col">Description</th>
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $slider)
                    <tr>
                        <th > {{ $slider->id}}</th>
                        <td scope="row"> {{ $slider->name }}</td>
                        <td scope="row"> {{ $slider->content }}</td>
                        <td><img src="{{ $slider->feature_image_path }}" class="product_image_150_100"/></td>
                        <td><a href="{{route('edit.slider',$slider->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('delete.slider',$slider->id)}}" class="btn btn-success">Delete</a></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                {{ $sliders->links() }}
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
