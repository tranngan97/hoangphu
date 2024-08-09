@php
$categories = \App\Models\TestCategory::get();
@endphp
@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing'). ' Thêm Bài Thi mới')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">Thêm Bài Thi mới</h1>
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
                          action="{{url('admin/test/save')}}"
                          method="POST" enctype="multipart/form-data">
                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}
                        <div class="panel-body">
                            <div class="form-group col-md-12">
                                <label class="control-label" for="test_pdf">PDF File (Image file)</label>
                                <div class="controls">
                                    <input style="padding: unset !important;" id="test_pdf" class="form-control" type="file" data-name="test_pdf" name="test_pdf">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" for="category">Phân Loại</label>
                                <div class="controls">
                                    <select id="category_select" name="category">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" for="answer">Đáp án</label>
                                <div class="controls">
                                    <input style="padding: unset !important;" id="answer" name="answer" class="form-control" type="text">
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
