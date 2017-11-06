@extends('layouts.app')
@section('content')
    @forelse($posts as $postiteration)
        <div class="well">
            <div>{{$postiteration['title']}}</div>
            <div>{{$postiteration['content']}}</div>
            @foreach($postiteration['comment'] as $comentIteration)
        <div>{{$comentIteration}}</div>
@endforeach
        </div>
        @empty
    <div class="alert alert-info">No posts yet</div>
        @endforelse
    @endsection