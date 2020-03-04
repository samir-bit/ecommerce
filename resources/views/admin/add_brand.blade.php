@extends('layouts.app')
@section('content')
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Brand</a></li>
                <li><a href="javascript:avoid(0)">Add Brand</a></li>
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
                              <h4>Add Brand Form</h4>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="{{route('manage-brand')}}" class="btn btn-primary">All Brand</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" method="POST" action="{{route('save-brand')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="brand_name" class="col-sm-2 control-label">Brand Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Brand Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Add Brand</button>
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



