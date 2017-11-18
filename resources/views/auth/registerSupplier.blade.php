
@extends('layouts.app')

@section('content')


    <div class="panel-heading"><h2>تسجيل مطعم/كافيه</h2></div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('suppliers.store') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-3 control-label">الاسم</label>

                <div class="col-md-8">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('field') ? ' has-error' : '' }}">
                <label for="field" class="col-md-3 control-label">التخصص</label>

                <div class="col-md-8">
                    <select id="field" class="form-control" name="field" value="{{ old('field') }}" required autofocus>
                        <option value="1">مطعم</option>
                        <option value="2">كافيه</option>
                        <option value="2">صيدلية</option>
                    </select>
                    @if ($errors->has('field'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('field') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <label for="phone" class="col-md-3 control-label">العنوان</label>

                <div class="col-md-8">
                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                    @if ($errors->has('address'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="phone" class="col-md-3 control-label">الرقم التليفون</label>

                <div class="col-md-8">
                    <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                    @if ($errors->has('phone'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>




            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-3 control-label">البريد الالكتروني</label>

                <div class="col-md-8">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-3 control-label">كلمة السر</label>

                <div class="col-md-8">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-3 control-label">تأكيد كلمة السر</label>

                <div class="col-md-8">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="تسجيل ">

            </div>
        </form>
    </div>
@endsection
