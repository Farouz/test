@extends('layout.main')
@section('content')
<div id="admin">
    <h1 style="font-style: italic;">Admin Category Panel</h1><hr>

    <p style="font-family: Times New Roman, Times, serif; font-size: 20px;">   Here you can view , delete and create new categories .  </p>
    <h2>Categories</h2><hr>
    <ul>
        @foreach($categories as $category)
            <li>
                {{$category->name}} -<a href="admin/{{$category->id}}/destroy">  <button type="button" class=" btn btn-lg btn-danger"
     style="
     background-color: #8A3324;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family: Arial, Helvetica, sans-serif;
	font-size:17px;
	padding:10px 28px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
">Delete</button></a>
                <a href="/category/{{$category->id}}">  <button type="button" class=" btn btn-lg btn-info"
     style="
     background-color: #2ab27b;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family: Arial, Helvetica, sans-serif;
	font-size:17px;
	padding:10px 28px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
">Show</button></a>

            </li>
            @endforeach
    </ul>
    <h2>Create a new Category</h2> <hr>
    <form method="post" action="create">
        {{csrf_field()}}
        <label for="name">Category Name</label>
        <input type="text" name="name" class="form-control" id="name" required style="
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;">
        <button type="submit" style="
background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family: Arial, Helvetica, sans-serif;
	font-size:17px;
	padding:10px 28px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
">Create</button>
    </form>
    @if(count($errors))
        <div class="form-group" >
            <div class="alert alert-error">
                <ul>
                    @foreach($errors->all() as $error )
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div><!--end admin-->

    @stop