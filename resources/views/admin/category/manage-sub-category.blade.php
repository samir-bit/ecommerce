@extends('layouts.app')
@section('content')
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Sub Category</a></li>
                <li><a href="javascript:avoid(0)">Manage Sub Category</a></li>
            </ul>
        </div>
    </div>
    <div class="row animated fadeInUp">
        <div class="row">
            <div class="col-sm-12">
                @include('includes.message')
                <div class="panel b-primary bt-sm">
                    <div class="panel-content d-flex justify-content-center">
                        <div class="row">
                            <div class="col-sm-10 text-center ">
                                <h4>Manage Sub Category Form</h4>
                            </div>
                            <div class="col-sm-2 text-right">
                                <a href="{{route('add-sub-category')}}" class="btn btn-primary">Add Sub Category</a>
                            </div>
                        </div>

                        <div class="row animated fadeInRight">
                            <div class="col-sm-12">
                                <div class="panel">
                                    <div class="panel-content">
                                        <div class="table-responsive ">
                                            <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Serial No</th>
                                                    <th>Root Category > Sub Category</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php($i=1)
                                                @foreach($data as $row)
                                                    <tr>
                                                        <td>{{$i++}}</td>

                                                        <td>{{$row->category}} >
                                                        @foreach($row->subCategories as $sub)
                                                            {{$sub->sub_cat}},
                                                        @endforeach
                                                        </td>
                                                        <td>
                                                            {{--{{$row->status==1?'Active':'Inactive'}}--}}
                                                            <input type="checkbox" data-toggle="toggle" data-size="mini" data-on="Active" id="subcategoryStatus" data-id="{{$row->id}}" data-off="Deactive"{{$row->status==1?'checked':' '}}>

                                                        </td>
                                                        <td>
                                                            {{--             @if($row->status==1)
                                                                             <a class="text-success btn btn-success" href="{{route('inactive-brand',$row->id)}}"><i class="fa fa-circle  "></i></a>
                                                                             @else
                                                                             <a class="text-success btn btn-warning" href="{{route('active-brand',$row->id)}} "><i class="fa fa-circle"></i></a>
                                                                         @endif--}}
                                                            <a class="text-success" href="{{route('edit-subcategory',$row->id)}}"><i class="fa fa-edit fa-2x"></i></a>
                                                            <a class="text-danger"  href="{{route('delete-subcategory',$row->id)}}"><i class="fa fa-trash fa-2x"> </i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

