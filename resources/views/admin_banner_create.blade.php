@php
$page = \App\Http\Controllers\PagesController::getAllPage();
@endphp
@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing'). ' Add new Banner')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">Add new Banner</h1>
    </div>
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                          class="form-edit-add"
                          action="{{url('admin/banner/save')}}"
                          method="POST" enctype="multipart/form-data">
                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}
                        <div class="panel-body">
                            <div class="form-group col-md-12">
                                <label class="control-label" for="banner_image">Banner Image</label>
                                <div class="controls">
                                    <input style="padding: unset !important;" id="banner_image" class="form-control" type="file" data-name="banner_image" name="banner_image">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" for="page">Page</label>
                                <div class="controls">
                                    <select id="page_select" name="page">
                                        @foreach($page as $pageId => $name)
                                            <option value="{{ $pageId }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            @section('submit-buttons')
                                <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                            @stop
                            @yield('submit-buttons')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
