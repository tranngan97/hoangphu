@php
    $categories = \App\Models\TestCategory::get();
@endphp
@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing'). ' Chỉnh sửa Bài Thi')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">Chỉnh sửa Bài Thi - {{$test->test_id}}</h1>
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
                          action="{{url('admin/test/save', ['id' => $test->test_id])}}"
                          method="POST" enctype="multipart/form-data">
                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}
                        <div class="panel-body">
                            <div class="form-group col-md-12">
                                <label class="control-label" for="test_pdf">PDF File (Image file)</label>
                                <div class="controls">
                                    <input style="padding: unset !important;" id="test_pdf" class="form-control" type="file" data-name="test_pdf" name="test_pdf">
                                    <a href="{{URL::to(str_replace('public', 'storage', $test->file_url))}}">{{$test->file_name}}</a>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" for="category">Phân Loại</label>
                                <div class="controls">
                                    <select id="category_select" name="category">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" @if($category->id == $test->category) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" for="answer">Đáp án</label>
                                <div class="controls">
                                    <input style="padding: unset !important;" value="{{$test->answer}}" id="answer" name="answer" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button class="btn btn-primary cancel">
                                <a style="color: white;" href="{{url('admin/tests')}}">Cancel</a>
                            </button>
                            <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
