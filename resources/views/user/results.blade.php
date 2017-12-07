@extends('layout.main')
@section('content')
    <h2>Search Results</h2>
    <div class="container">


        <ul>
            @foreach($searchCats as $searchCat)
                <li>
                    {{$searchCat->name}}
                </li>
            @endforeach
        </ul>
    </div>
    @stop