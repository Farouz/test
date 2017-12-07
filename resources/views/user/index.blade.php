@extends('layout.main')
@section('content')
<h1>Categories</h1>
    <ul>
        @foreach($categories as $category)
            <li>
                {{$category->name}}
            </li>
            @endforeach
    </ul>
    @stop