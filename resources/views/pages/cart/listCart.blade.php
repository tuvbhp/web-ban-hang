@extends('pages.master')
@section('title', 'Cart')
@section('content')
    @include('pages.cart.components.tableCart')
@endsection
@section('js')
    <script src="{{ asset('pages/js/cart.js') }}"></script>
@endsection
