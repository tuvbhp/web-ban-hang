@extends('homes.master')
@section('content')

    <div class="content">
        <div class="content-wrapper">
            @include('homes.content-header',['name'=>'Menus','key'=>'List'])
            <div class="col-md-12">
                <a href="{{route('create.menu')}}" class="btn btn-success "> Create New menu </a>
            </div>
            <br>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên Menu</th>
                        <th scope="col">Parent_ID</th>
                        <th scope="col"> Slug </th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menus as $menu )
                        <tr>
                            <th scope="row">{{ $menu->id }}</th>
                            <td>{{ $menu->name }}</td>
                            <td>{{ $menu->parent_id }}</td>
                            <td>{{ $menu->slug }}</td>
                            <td><a href="{{route('edit.menu', $menu->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('delete.menu', $menu->id)}}" class="btn btn-success">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                {{ $menus->links() }}
            </div>
        </div>
    </div>
@endsection
