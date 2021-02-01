@extends('app')
@section('content')
    <ul>
        <li><a href="/"> Home</a></li>
        <li><a href="/list"> List</a></li>
        <li><a href="/blog"> Blog</a></li>
    </ul>
    <br />
    <div style="width:100%;">
        <img src="{{ url('/images/icons/icon-512x512.png') }}" style="border: thin solid #000" />
        <h1 class="text-xl">Blog Page</h1>
    </div>
@endsection
