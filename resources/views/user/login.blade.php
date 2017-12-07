@extends('layout.main')
@section('content')
    <h2>Login</h2>
    <form method="post" action="/login">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email" >Email</label>
            <input name="email" type="text" id="email" style="
width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
" class="form-control">
        </div>
        <div class="form-group">
            <label for="password" >Password</label>
            <input name="password" id="password" type="password" style="
width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
" class="form-control">
        </div>
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
">Login</button>
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
    @stop