@extends('layouts.temp')
@section('pageTitle')
توصيلتك عندنا
@endsection

@section('content')
	
				<div class="three-fourth">
					<form>
						<header class="f-title color">تفاصيل الأوردر</header>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Name and surname</label>
								<input type="text" id="name" />
							</div>
							<div class="one-half">
								<label for="company">Company name</label>
								<input type="text" id="company" />
							</div>
						</div>
						<div class="f-row">
							<div class="one-half">
								<label for="number">Phone number</label>
								<input type="number" id="number" />
							</div>
							
							<div class="one-half">
								<label for="email">Email address</label>
								<input type="email" id="email" />
							</div>
						</div>
						
						<header class="f-title color">1. leg</header>
						
			
						<div class="f-row">
							<div class="one-third">
								<label for="dep-date">Pick up date and time</label>
								<input type="text" id="dep-date" />
							</div>
							<div class="one-sixth">
								<label for="passengers">passengers</label>
								<input type="number" id="passengers" min="1" />
							</div>
							<div class="one-half">
								<label for="vehicle">Select Vehicle type</label>
								<select id="vehicle">
									<option selected>Private car</option>
									<option>Private minivan</option>
									<option>Private coach</option>
									<option>Shared minivan</option>
									<option>Shared coach</option>
									<option>Private limousine</option>
									<option>Private helicopter</option>
								</select>
							</div>
						</div>
						<div class="f-row">
							<div class="one-half">
								<label for="pickuploc">Pick up location</label>
								<input type="text" id="pickuploc" />
							</div>
							<div class="one-half">
								<label for="dropoffloc">Drop off location</label>
								<input type="text" id="dropoffloc" />
							</div>
						</div>
						
						<div class="f-row">
							<div class="full-width">
								<label for="extras">Additional information <span>(E.g. flight number, airport terminal, ship name, child/booster seats etc.)</span></label>
								<textarea id="extras"></textarea>
							</div>
						</div>
						
						<div class="actions">
							<a href="#" class="btn medium back">Add a leg</a>
							<a href="#" class="btn medium back">Add return journey</a>
							<a href="#" class="btn medium color right">Submit request</a>
						</div>
					</form>
				</div>
			
<!--

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

-->

@endsection