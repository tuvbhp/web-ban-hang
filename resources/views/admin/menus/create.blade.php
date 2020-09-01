@extends('homes.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('homes.content-header',['name'=> 'Menu','key'=>'Create'])
        <div class="col-sm-6">
            <form method="post" action="{{route('store.menu')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1"> Name Menu</label>
                    <input type="text" class="form-control" placeholder="Nhập Menu" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Chọn Menu Cha</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">Chọn menu cha </option>
                        {!! $optionSelect !!}
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
