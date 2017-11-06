@extends('layouts.app')

@section('content')
    <div class="col-md-3"></div>
    <div class="col-md-6">
        {{--@if(count($errors))--}}
            {{--<div class="alert alert-danger">--}}
                {{--<ul>--}}
                    {{--@foreach($errors->all() as $error)--}}
                        {{--<li>{{$error}}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
        {{--@if(Session::has('success'))--}}
            {{--<div class="alert alert-success">--}}
                {{--{{Session::get('success')}}--}}
            {{--</div>--}}
        {{--@endif--}}
        <form method="post" action="{{route('contacts.store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="contactName"  placeholder="Enter Name" name="contactName" value="{{old('contactName')}}">
                @if($errors->get('contactName'))
                    <div style="color: red; font-weight: bold;">
                        @foreach($errors->get('contactName') as $error)
                            {{$error}}
                            <br>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email"  aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
                @if($errors->get('email'))
                    <div style="color: red; font-weight: bold;">
                        @foreach($errors->get('email') as $error)
                            {{$error}}
                            <br>
                        @endforeach
                    </div>
                @endif

            </div>

            <div class="form-group">
                <label for="exampleSelect1">mobile</label>
                <input type="text" class="form-control" id="contactMobile"  placeholder="Enter Mobile" name="contactMobile"  value="{{old('contactMobile')}}">
                @if($errors->get('contactMobile'))
                    <div style="color: red; font-weight: bold;">
                        @foreach($errors->get('contactMobile') as $error)
                            {{$error}}
                            <br>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleSelect1">country</label>
                <input type="text" class="form-control" id="country"  placeholder="Enter country" name="country"  value="{{old('country')}}">
                @if($errors->get('country'))
                    <div style="color: red; font-weight: bold;">
                        @foreach($errors->get('country') as $error)
                            {{$error}}
                            <br>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleSelect1">city</label>
                <input type="text" class="form-control" id="city"  placeholder="Enter city" name="city"  value="{{old('city')}}">
                @if($errors->get('city'))
                    <div style="color: red; font-weight: bold;">
                        @foreach($errors->get('city') as $error)
                            {{$error}}
                            <br>
                        @endforeach
                    </div>
                @endif
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-md-3"></div>
@endsection