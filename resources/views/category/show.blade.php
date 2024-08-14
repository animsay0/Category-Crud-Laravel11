<!-- resources/views/home.blade.php -->
@extends('layouts.app')

<!-- @section('title', 'Home Page') -->

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Show Category Details
                        <a href="{{url("category")}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <h5>Name</h5>
                        <p>{{$category->name}}</p>

                    </div>
                    <div class="mb-3">
                        <h5>Description</h5>
                        <p>{!!$category->description!!}</p>

                    </div>
                    <div class="mb-3">
                        <h5> Status
                        </h5>
                        <br>
                        <p>{{$category->status == 1 ? 'checked' : '' }}</p>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection