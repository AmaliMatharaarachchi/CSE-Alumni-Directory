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
                        <h3 class="icon-graduation-cap"><span>Enter a password </span></h3>


                        <form class="info-form" METHOD="post" action='{{ url('/register') }} '>
                            {{csrf_field()}}


                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email Address</label>
                                <div class="col-xs-12 col-md-6">
                                    <input type="email" placeholder="Email Address" id="email" name="email"/>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" name="password" type="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm
                                        Password</label>

                                    <div class="col-md-6">
                                        {{--<input id="confirm_password" type="password" class="form-control" name="confirm_password" required>--}}

                                        <input id="confirm_password" name="password_confirmation" type="password" required>
                                    </div>
                                </div>

                            </div>
                            <button class="base-text-color" type="submit">Log In</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
