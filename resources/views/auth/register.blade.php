@extends('layouts.master')
@section('title')
    dashboard
@endsection
@section('head')

@endsection
@section('body')
    <div class="page-title P30">
        <h2 class="fl-l">Directory</h2>
        <a class="share-link fl-r" href="#"><i class="icon-export"></i>Share</a>
    </div>

    <div class="row matchHeight-container">
        <div class="info-container">
            <div class="col-xs-12 col-md-6">
                <div class="info-item box P30 bg-7">
                    <h3 class="icon-graduation-cap"><span>GET YOURSELF REGISTERED</span></h3>

                    <form class="info-form" METHOD="post" action='{{ url('/register') }} '>
                        {{csrf_field()}}

                        <div class="row">
                            <div class="row">
                                <label>Enter your name</label></div>

                            <div class="col-xs-12 col-md-6">
                                <input type="text" placeholder="First Name" id="first_name" name="first_name"/>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <input type="text" placeholder="Last Name" id="last_name" name="last_name"/>
                            </div>
                        </div>



                        <div class="row">
                            <div class="row">
                                <label>Enter your email address</label></div>

                            <div class="col-xs-12 col-md-6">
                                <input type="email" placeholder="Email Address" id="email" name="email"/>
                            </div>
                        </div>


                        <div class="row">
                            <label>Select your batch</label></div>

                        <div class="row">
                            <div class="dropdown">
                                <select style="color: #0d3625" name="batch" id="batch"
                                        data-placeholder="batch">

                                    @foreach($batches as $batch)
                                        <option value={{$batch->id}}>
                                            batch {{$batch->batch_name}} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="row">

                            <div class="row">
                                <label>Enter your home address</label></div>

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
                        <div class="row">
                            <div class="row">
                                <label>Enter your professional details</label></div>
                            <div class="col-xs-12 col-md-6">
                                <input type="text" placeholder="Profession" id="profession" name="profession"
                                       required/>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <input type="text" placeholder="Organization name" id="organization_name"
                                       name="organization_name" required/>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <input type="text" placeholder="Organization_address" id="organization_address"
                                       name="organization_address"/>
                            </div>

                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
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

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm
                                    Password</label>

                                <div class="col-md-6">
                                    {{--<input id="confirm_password" type="password" class="form-control" name="confirm_password" required>--}}

                                    <input id="confirm_password" name="confirm_password" type="password"
                                           pattern="^\S{6,}$"
                                           onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');"
                                           placeholder="Verify Password" required>
                                </div>
                            </div>

                        </div>
                        <button class="base-text-color" type="submit">Send Request</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection