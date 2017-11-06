@extends('layouts.app')
@section('content')
    <form action="get">
        <table class="table table-hover" style="width: 50%;margin: auto">
            <thead>
            <tr style="background-color: #1f648b;color: #fff;">
            <th>Name</th>
                <th>E-mail</th>
                <th>City</th>
            </tr></thead>
    @forelse($contacts as $x)
        <tbody>
         <tr>
            <td>{{$x['name']}}</td>
             <td>{{$x['email']}}</td>
             <td>{{$x['city']}}</td>

         </tr>
        </tbody>
    @empty
        <div class="alert alert-info">No contact yet</div>
    @endforelse
    </form>
@endsection