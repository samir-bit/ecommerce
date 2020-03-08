@extends('layouts.app')
@section('content')
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Sub Category</a></li>
            <li><a href="javascript:avoid(0)">Add Sub Category</a></li>
        </ul>
    </div>
</div>
<div class="row animated fadeInUp">
    <div class="row">
        <div class="col-sm-8">
            @include('includes.message')
            <div class="panel b-primary bt-sm">
                <div class="panel-content d-flex justify-content-center">
                    <div class="row">
                        <div class="col-sm-6 text-center ">
                            <h4>Add Sub Category Form</h4>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('manage-sub-category')}}" class="btn btn-primary">All Sub Category</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" method="post" action="{{--{{route('save-sub-category')}}--}}">
                                @csrf
                                <div class="form-group">
                                    <label for="category" class="col-sm-2 control-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="cat_id" id="category">
                                            <option value="">Select Category</option>

                                            <option value="">test</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sub_cat" class="col-sm-2 control-label">Sub Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="sub_cat" value="{{old('sub_cat')}}" id="sub_cat" placeholder="Sub Category Name"data-validation="required">
                                        @error('category')
                                        <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save Sub Category</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




