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
                <h1>CSE Alumni Directory</h1>

                <form class="info-form" METHOD="post" action='{{ route('batch_details') }} '>
                    {{csrf_field()}}

                    <div class="col-md-3">
                        <label>Select by batch : </label></div>

                    <div class="col-md-3">
                        <div class="dropdown">
                            <select style="color: #0d3625" name="batch" id="batch"
                                    data-placeholder="batch">

                                @foreach($batches as $batch)
                                    <option value={{$batch->batch_id}}>
                                        batch {{$batch->batch_name}} </option>
                                @endforeach

                            </select>


                        </div>
                    </div>
                    <div class="col-md-6">
                        <button class="base-text-color" type="submit">GO</button>
                    </div>


                </form>
            </div>
        </div>

    </div>
@endsection