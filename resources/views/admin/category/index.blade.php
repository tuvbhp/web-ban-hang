@extends('homes.master')
@section('content')

    <div class="content">
        <div class="content-wrapper">
            @include('homes.content-header',['name'=>'Category','key'=>'List'])
            <div class="col-md-12">
                <a href="{{route('create.category')}}" class="btn btn-success "> Create New Category </a>
            </div>
            <br>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Parent_ID</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category )
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->parent_id }}</td>
                            <td>{{ $category->slug }}</td>
                            <td><a href="{{route('edit.category', $category->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('delete.category', $category->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="col-md-12">
               {{ $categories->links() }}
            </div> --}}
        </div>
    </div>
@endsection
