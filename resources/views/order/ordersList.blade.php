@extends('layouts.temp')

@section('content')
    <div class="panel-body">

        @section('content')
            @forelse($ordersList as $orderItem)
                <div class="well">
                    <row>
                        <div class="col-lg-6">{{$orderItem->description}}</div>
                        <div class="col-lg-3">{{$orderItem->allowedTime}}</div>
                    </row>

                    <row> <div class="col-lg-6">{{$orderItem->direction}}</div>
                        <div class="col-lg-6">{{$orderItem->dname}}</div></row>
                </div>
            @empty
                <div class="alert alert-info">
                    NO POSTS YET
                </div>
            @endforelse
        @endsection
    </div>

@endsection
