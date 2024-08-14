<!-- resources/views/home.blade.php -->
@extends('layouts.app')

<!-- @section('title', 'Home Page') -->

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create Category
                        <a href="{{url("category")}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                            <span class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="3" class="form-control"></textarea>
                            <span class="text-danger">
                            @error('description')
                                {{$message}}
                            @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label><br>

                            <input type="checkbox" name="status" checked style="width:30px;height:30px">
                            Checked=visible , unchecked=hidden
                            <span class="text-danger">
                            @error('status')
                                {{$message}}
                            @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="sumbit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection