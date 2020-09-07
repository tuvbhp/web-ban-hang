@extends('homes.master')
@section('title','List Products')

@section('css')
<link rel="stylesheet" href="{{ asset('vendor/index/list.css') }}">
@endsection

@section('content')

    <div class="content">
        <div class="content-wrapper">
            @include('homes.content-header',['name'=>'Product','key'=>'List'])
            <div class="col-md-12">
                <a href="{{route('create.product')}}" class="btn btn-success float-right m-2"> Create New Product </a>
            </div>
            <br>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Giá Sản Phẩm</th>
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Danh Mục</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product )
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ number_format($product->price) }}</td>
                            <td><img class="product_image_150_100" src=" {{ $product->feature_image_path }} " alt=""></td>
                            <td>{{ optional($product->category)->name }}</td>
                            <td><a href="{{route('edit.product', $product->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('delete.product', $product->id)}}" class="btn btn-success">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
