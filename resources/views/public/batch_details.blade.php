@extends('layouts.master')
@section('title')
    dashboard
@endsection
@section('head')

@endsection
@section('body')

    <div class="page-title P30">
        <h2 class="fl-l">add batch name here</h2>

        <a class="share-link fl-r" href="#"><i class="icon-export"></i>Share</a>
    </div>

    <div class="typography">


        {{--<div class="row bg-0">--}}

            {{--@foreach($students as $student)--}}
            {{--<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">--}}

                    {{--<div class="P30">--}}

                        {{--<h4>{{$student->first_name}} {{$student->last_name}}</h4>--}}
                        {{--<label>Email Address : {{$student->email}}</label>--}}
                        {{--<hr>--}}
                        {{--<label>Home Address : {{$student->address1}} , {{$student->address2}} , {{$student->city}}--}}
                            {{--, {{$student->country}}</label>--}}
                        {{--<hr>--}}
                        {{--<label>Profession : {{$student->profession}}</label>--}}
                        {{--<hr>--}}
                        {{--<label>Organization : {{$student->organization_name}} , {{$student->organization_address}}</label>--}}


                    {{--</div>--}}

            {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}

        @foreach($students as $student)
        <div class="col-xs-12 col-md-6" >
            <div class="outerframe" style="padding: 10px;" >
                <div class="block-courses_details clearfix bg-0 hovershadow">
                    <div class="col-xs-12 col-sm-3 col-md-5 col-lg-4">
                        <div class="column-description1 bg-4 corner">
                            {{--<img class="img-responsive" src="/images/people/profile.jpg" alt="profile" />--}}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-9 col-md-7 col-lg-8">
                        <div class="P30">
                            <h3 class="title">{{$student->first_name}} {{$student->last_name}}</h3>

                            <a href="mailTo:{{$student->email}}"><p>{{$student->email}}</p></a>

                            <hr>
                            <label>Home Address : {{$student->address1}} , {{$student->address2}} , {{$student->city}}
                                , {{$student->country}}</label>
                            <hr>
                            <label>Profession : {{$student->profession}}</label>
                            <hr>
                            <label>Organization : {{$student->organization_name}} , {{$student->organization_address}}</label>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endforeach


    </div>
    <br>
@endsection