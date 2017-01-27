@extends('layouts.master')

@section('title')
    University
@endsection


@section('body')


    <div class="page-title P30">
        <h2 class="fl-l">My Profile</h2>

        <a class="share-link fl-r" href="#"><i class="icon-export"></i>Share</a>
    </div>


    <div class="row">
        <div class="post-item">

            {{csrf_field()}}
            <div class="col-md-6">
                <div class="column-description box P30 bg-2 corner">
                    <h1>first name last name</h1>

                </div>
            </div>

            <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                <div class="P30 bg-0">
                    <div class="col-md-6">
                        <div class="text-center">
                            <form class="form-horizontal" METHOD="post" action='# '>
                                <img src="images/images.jpg" class="avatar img-circle" alt="avatar">

                                <h6>Upload a different photo...</h6>


                                <input class="form-group" id="file-type" type="file" size="4" name="file"/>


                                <button class="base-text-color" type="submit">Change</button>


                            </form>
                        </div>

                    </div>


                </div>
            </div>

            <div class="row">
                <div class="post-item">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                        <div class="column-description box P30 bg-2 corner">


                            <h5>Personal info</h5>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                        {{--<div class="P30 bg-0">--}}
                        <div class="P30 bg-0">
                            <hr>
                            <hr>

                            <form class="form-horizontal" METHOD="post" action='{{route('user_registration')}} '>
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="row">
                                        <h2>Name</h2>
                                    </div>

                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="First Name" id="first_name" name="first_name"/>
                                    </div>

                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Last Name" id="last_name" name="last_name"/>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="row">
                                        <h2>Home Address</h2></div>

                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Address line 1" id="address_1" name="address1"
                                               required/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Address line 2" id="address_2" name="address2"/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="City" id="city" name="city" required/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Country" id="country" name="country" required/>
                                    </div>

                                </div>


                                <button class="base-text-color" type="submit">Update</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="post-item">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                        <div class="column-description box P30 bg-2 corner">


                            <h5>Professional info</h5>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                        {{--<div class="P30 bg-0">--}}
                        <div class="P30 bg-0">
                            <hr>
                            <hr>
                            <hr>

                            <form class="form-horizontal" METHOD="post" action='{{route('user_registration')}} '>
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="row">
                                        <h2>Profession</h2></div>
                                    <div class="col-xs-12 row">
                                        <input type="text" placeholder="Profession" id="profession" name="profession"
                                               required/>
                                    </div>
                                    <div class="row">
                                        <h2>Organization Name</h2></div>
                                    <div class="col-xs-12 row">
                                        <input type="text" placeholder="Organization name" id="organization_name"
                                               name="organization_name" required/>
                                    </div>
                                    <div class="row">
                                        <h2>Organization Address</h2></div>
                                    <div class="col-xs-12 row">
                                        <input type="text" placeholder="Organization_address" id="organization_address"
                                               name="organization_address"/>
                                    </div>

                                </div>


                                <button class="base-text-color" type="submit">Update</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="post-item">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                        <div class="column-description box P30 bg-2 corner">


                            <h5>Change Password</h5>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                        {{--<div class="P30 bg-0">--}}
                        <div class="P30 bg-0">
                            <hr>
                            <hr>
                            <hr>

                            <form class="form-horizontal" METHOD="post" action='{{route('user_registration')}} '>
                                {{csrf_field()}}


                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <h2 for="password" class="control-label">Password</h2>
                                    </div>
                                    <div class="row">
                                        {{--<input id="password" type="password" class="form-control" name="password" required>--}}
                                        <input id="password" name="password" type="password" pattern="^\S{6,}$"
                                               onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;"
                                               placeholder="Password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="row">
                                        <h2 for="password-confirm" class="control-label">Confirm
                                            Password</h2>
                                    </div>


                                    <div class="row">
                                        {{--<input id="confirm_password" type="password" class="form-control" name="confirm_password" required>--}}

                                        <input id="confirm_password" name="confirm_password" type="password"
                                               pattern="^\S{6,}$"
                                               onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');"
                                               placeholder="Verify Password" required>
                                    </div>
                                </div>

                                <button class="base-text-color" type="submit">Update</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

         </div>
    </div>
@endsection