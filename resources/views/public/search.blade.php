@extends('layouts.master')
@section('title')
    Search
@endsection


@section('body')

    <div class="row matchHeight-container">
        <div class="col-xs-12 col-md-6">
            <div class="info-item box P30 bg-7 corner">
                <h1>CSE Alumni Directory</h1>


                <form class="info-form" METHOD="post" action='{{ route('details_by_name') }} '>
                    {{csrf_field()}}

                    <div class="col-md-5">
                        <label>Search by batch </label></div>

                    <div class="col-md-5">
                        <div class="dropdown">
                            <select style="color: #0d3625" name="batch" id="batch"
                                    data-placeholder="batch">
                                <option value='all'>
                                    All </option>
                              @foreach($batches as $batch)
                                    <option value={{$batch->batch_id}}>
                                        batch {{$batch->batch_name}} </option>
                                @endforeach

                            </select>


                        </div>
                    </div>

                    <br><br>


                    <div class="col-md-5">
                        <label>Search by a keyword </label></div>
                    <div class="col-xs-12 col-md-5">
                        <input type="text" id="name" name="name"/>
                    </div>

                    <div class="col-md-2">
                        <button class="base-text-color" type="submit">GO</button>
                    </div>
                    <br><hr><br>

                </form>
            </div>
        </div>
        @yield('results')
    </div>


@endsection
