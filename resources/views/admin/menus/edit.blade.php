@extends('homes.master')
@section('content')
    <div class="content-wrapper">
        @include('homes.content-header',['name'=> 'Menu','key'=>'Edit'])
        <div class="col-sm-6">
            <form method="post" action="{{ route('update.menu',['id'=> $menuEdit->id]) }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Menu Name</label>
                    <input type="text" class="form-control" placeholder="Nhập Tên Menu" name="name"
                           value="{{ $menuEdit->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Chọn Menu Cha</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">Chọn menu cha</option>
                        {!! $optionSelect !!}
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
