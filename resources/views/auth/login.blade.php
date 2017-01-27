@extends('layouts.master')
@section('title')
    Login
@endsection
@section('head')

@endsection

@section('body')

    <section class="main-content">
        <div class="page-title P30">
            <h2 class="fl-l">Login</h2>

            <a class="share-link fl-r" href="#"><i class="icon-export"></i>Share</a>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="content-intro content-intro_s2">
                </div>
            </div>
        </div>

        <div class="row matchHeight-container">
            <div class="info-container">
                <div class="col-xs-12 col-md-6">
                    <div class="info-item box P30 bg-7">
                        <h3 class="icon-graduation-cap"><span>LOG IN</span></h3>

                        <form class="info-form" METHOD="post" action='{{ url('/login') }} '>
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">email address</label>

                                <div class="col-xs-12 col-md-6">
                                    <input type="email" placeholder="Email Address" id="email" name="email"/>
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}
                                    <input id="password" name="password" type="password" placeholder="Password" required>


                                </div>




                            </div>
                            <button class="base-text-color" type="submit">Log In</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>



        {{--<div class="row matchHeight-container">--}}
            {{--<div class="col-xs-12 col-md-6">--}}
                {{--<div class="info-item P30 bg-7 box">--}}
                    {{--<h1>University User Login</h1>--}}

                    {{--<form class="info-form" role="form" method="POST" action="{{ url('/login') }}">--}}
                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email"--}}
                                       {{--value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<p class="remember">--}}
                            {{--<label style="color: #f9f9f9"><input name="a1" type="checkbox" value=""> <span></span> Remember Me</label>--}}

                            {{--<span class="fl-r"><a href="#" style="color: #f9f9f9">forgot your password?</a></span>--}}
                        {{--</p>--}}

                        {{--<button class="base-text-color" type="submit">Login</button>--}}


                    {{--</form>--}}


                    {{--<form class="info-form" role="form" method="POST" action="{{ url('/login') }}">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                    {{--<div class="col-md-6">--}}
                    {{--<input id="email" type="email" class="form-control" name="email"--}}
                    {{--value="{{ old('email') }}" required--}}
                    {{--autofocus>--}}

                    {{--@if ($errors->has('email'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                    {{--</span>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                    {{--<div class="col-md-6">--}}
                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                    {{--@if ($errors->has('password'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('password') }}</strong>--}}
                    {{--</span>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<div class="col-md-6 col-md-offset-4">--}}
                    {{--<p class="remember">--}}
                    {{--<label><input name="a1" type="checkbox" value=""> <span></span> Remember Me</label>--}}

                    {{--<span class="fl-r"><a href="#">forgot your password?</a></span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<div class="col-md-6 col-md-offset-4">--}}

                    {{--<button class="base-text-color" type="submit">Login</button>--}}

                    {{--</div>--}}

                    {{--</div>--}}


                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    </section>
@endsection
