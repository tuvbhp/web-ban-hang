@extends('homes.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('homes.content-header',['name'=> 'Category','key'=>'Create'])
    <div class="col-sm-6">
        <form method="post" action="{{route('store.category')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" class="form-control" placeholder="Nhập Tên Danh Mục" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Chọn Danh Mục Cha</label>
                <select class="form-control" name="parent_id">
                    <option value="0">Chọn danh mục cha </option>
                    {!! $htmlOption !!}
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
