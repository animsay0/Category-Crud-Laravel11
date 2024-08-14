
<!-- resources/views/home.blade.php -->
@extends('layouts.app')

<!-- @section('title', 'Home Page') -->

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category
                        <a href="{{url("category")}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{route('category.update',$category->id)}}" method="POST">
                        
                        @method('PUT')

                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$category->name}}">
                            <span class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="3" class="form-control">{!!$category->description!!}</textarea>
                            <span class="text-danger">
                            @error('description')
                                {{$message}}
                            @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label><br>

                            <input type="checkbox" name="status" {{$category->status == 1 ? 'checked' : '' }} style="width:30px;height:30px">
                            Checked=visible , unchecked=hidden
                            <span class="text-danger">
                            @error('status')
                                {{$message}}
                            @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="sumbit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection