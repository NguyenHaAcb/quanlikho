@extends('layout')

@section('title', 'List PRODUCT')

@section('content')
<div class="row isotope-grid">
    
        @foreach ($productList as $product)
        <ul>
        <li>
            <samp>Mã Danh Mục</samp>
            {{ $product->id}}
        </li>
        <li>
            <samp>Tên Danh Mục</samp>
            {{ $product->name}}
        </li>
        <li>
            <small>Status</small>
            {{ $product->desc}}</li>
        </ul>
        @endforeach
    




</div>

@endsection
