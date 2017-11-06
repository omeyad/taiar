@extends('layouts.app')
@section('content')
    <div class="col-sm-3"></div>

    <div class="container col-md-6" >
        <div class="col-md-4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuX7Xpful82rrUyYLXgezCZAPPhX_azBba5m4fB-BtdzKaJx5L" width="100" height="100"></div>
        <div class="col-md-8">
<form class="form-control">
            <input type="text" name="contactFName" value="heba ">
            <input type="text" name="contactLName" value="ahmed">
            <input type="radio" name="gender" value="male">male
            <input type="radio" name="gender" value="female">female
            <input type="text" name="userName" value="heba_ahmed">
            <input type="file" name="file1">
</form>
        </div>


    </div>
    <div class="col-sm-3"></div>

    @endsection