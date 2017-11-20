@extends('layouts.temp')
@section('pageTitle')
قولنا تفاصيل اوردرك
@endsection
@section('content')
				<!-- Search -->
		<div class="advanced-search color" id="booking" style="margin-top:10%">
			<div class="wrap">
				 @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('orders.store') }}">
					<!-- Row -->
					<div class="f-row" style="text-align:right">
						<div class="form-group datepicker one-third">
							<label for="dep-date">وقت التوصيل</label>
							<input type="time"  class="form-control" id="dep-date" name="orderTime" value="{{ old('orderTime') }}" required/>
						</div>
						<div class="form-group select one-third">
							<label>طريقة التوصيل</label>
                            <select id="dType"  class="form-control" name="dType"  required autofocus>

                          @foreach($DeliveryTypeList as $DeliveryTypeItem)
                            <option value="{{$DeliveryTypeItem->id}}">{{$DeliveryTypeItem->dname}}</option>
                            @endforeach

                        </select>
						</div>
						<div class="form-group select one-third">
							<label>العنوان</label>
							  <input id="direction" type="text" class="form-control" name="direction" value="{{ old('direction') }}" required autofocus>

                        @if ($errors->has('direction'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('direction') }}</strong>
                                    </span>
                        @endif
						</div>
					</div>
                					<row>

                <div class="form-group datepicker one-third  col-md-6" style="float:right">
							<label>وصف الاوردر</label>
                    <textarea row=2 style="height:100px" id="orderName" type="text" class="form-control" name="orderName" value="{{ old('orderName') }}" required autofocus></textarea>

                        @if ($errors->has('direction'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('direction') }}</strong>
                                    </span>
                        @endif
                </div>
						<div class="form-group datepicker one-third  col-md-6" style="margin-top:5%">
							<button type="submit" class="btn large black">اطلب</button>
						</div>
						</row>
					<!-- //Row -->
					
				
				</form>
			</div>
		</div>
		<!-- //Search -->

     {{--   <div class="panel-heading"><h2>تفاصيل اوردك</h2></div>

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


--}}
@endsection
