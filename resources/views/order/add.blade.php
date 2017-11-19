@extends('layouts.app')

@section('content')

        <div class="panel-heading"><h2>تفاصيل اوردك</h2></div>

        <div class="panel-body">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('orders.store') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('orderName') ? ' has-error' : '' }}">
                    <label for="orderName" class="col-md-3 control-label"> وصف الطلب  </label>

                    <div class="col-md-7">
                        <input id="orderName" type="text" class="form-control" name="orderName" value="{{ old('orderName') }}" required autofocus>

                        @if ($errors->has('orderName'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('orderName') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('direction') ? ' has-error' : '' }}">
                    <label for="direction" class="col-md-3 control-label">توصيل ألي </label>

                    <div class="col-md-7">
                        <input id="direction" type="text" class="form-control" name="direction" value="{{ old('direction') }}" required autofocus>

                        @if ($errors->has('direction'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('direction') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('dType') ? ' has-error' : '' }}">
                    <label for="dType" class="col-md-3 control-label">طريقة النقل   </label>

                    <div class="col-md-7">

                        <select id="dType"  class="form-control" name="dType"  required autofocus>

                          @foreach($DeliveryTypeList as $DeliveryTypeItem)
                            <option value="{{$DeliveryTypeItem->id}}">{{$DeliveryTypeItem->dname}}</option>
                            @endforeach

                        </select>
                </div>



                            @if ($errors->has('dType'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('dType') }}</strong>
                                    </span>
                        @endif

                    </div>


                <div class="form-group{{ $errors->has('orderTime') ? ' has-error' : '' }}">
                    <label for="orderTime" class="col-md-3 control-label">وقت تسليم الطلب </label>

                    <div class="col-md-7">
                        <input id="orderTime" type="time" class="form-control" name="orderTime" value="{{ old('orderTime') }}" required autofocus>

                        @if ($errors->has('orderTime'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('orderTime') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group">

                    <input type="submit" value="اطلب">

                </div>
            </form>
        </div>



@endsection
