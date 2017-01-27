@extends('layouts.master')
@section('title')
    Search
@endsection
@section('head')

@endsection

@section('body')

    <div class="row matchHeight-container">
        <div class="col-xs-12 col-md-6">
            <div class="info-item box P30 bg-7 corner">
                <h1>Search the CSE Alumni Directory</h1>

                <form class="info-form" action="http://idealui.com/">

                    <input type="text" placeholder="First Name"/>

                    <input type="text" placeholder="Last Name"/>

                    <button class="base-text-color" type="submit"><i class="icon-search"></i>Find Person</button>
                </form>
            </div>
        </div>

    </div>
@endsection
