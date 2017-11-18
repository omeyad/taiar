
@extends('layouts.app')

@section('content')

                <div class="panel-heading"><h2>تسجيل طيار</h2></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('delivaries.store') }}">
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

                        <div class="form-group{{ $errors->has('nid') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">الرقم القومي</label>

                            <div class="col-md-8">
                                <input id="nid" type="text" class="form-control" name="nid" value="{{ old('nid') }}" required autofocus>

                                @if ($errors->has('nid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Delivery') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">امكانية التوصيل</label>

                            <div class="col-md-8">
                                <select id="Delivery" class="form-control" name="Delivery" value="{{ old('Delivery') }}" required autofocus>
                                    <option value="1">موتوسكيل</option>
                                    <option value="2">سيارة</option>
                                </select>
                                @if ($errors->has('Delivery'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Delivery') }}</strong>
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


                        <div class="form-group{{ $errors->has('birthDate') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">تاريخ الميلاد</label>

                            <div class="col-md-8">
                                <input id="birthDate" type="date" class="form-control" name="birthDate" value="{{ old('birthDate') }}" required autofocus>

                                @if ($errors->has('birthDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('job') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label"> المهنة الاساسية</label>

                            <div class="col-md-8">
                                <input id="job" type="text" class="form-control" name="job" value="{{ old('job') }}" required autofocus>

                                @if ($errors->has('job'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job') }}</strong>
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
