@php
$banners = \App\Http\Controllers\BannersController::getAllBanner();
@endphp
@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing'). ' Banners')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">Banners</h1>
        <a href="{{url('admin/banner/create')}}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i><span>{{ __('voyager::generic.add_new') }}</span>
        </a>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Page</th>
                                        <th class="actions dt-not-orderable">{{ __('voyager::generic.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($banners as $banner)
                                        <tr>
                                            <td>{{$banner['id']}}</td>
                                            <td><img src="{{URL::to($banner['image_url'])}}" style="max-width: 100px"></td>
                                            <td>{{$banner['page_id']}}</td>
                                            <td>
                                                <a href="{{url('admin/banner/edit')}}" class="btn btn-primary btn-sm edit">
                                                    <span>{{ __('voyager::generic.edit') }}</span>
                                                </a>
                                                <a href="{{url('admin/banner/delete')}}" class="btn btn-danger btn-sm delete">
                                                    <span>{{ __('voyager::generic.delete') }}</span>
                                                </a>
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
@stop
