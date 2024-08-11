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
                                <label class="control-label" for="answer">Câu hỏi:</label><div style="margin-left: 5%;" id="add-question" class="button" onclick="addQuestion()">Thêm câu hỏi</div>
                                <div class="controls" id="question-box">
                                    @foreach($data as $number => $questionData)
                                        <div style="margin-top: 1%" class="question-box">
                                            <h4>Câu {{$number}}</h4>
                                            <textarea rows="3" style="width: 500px" name="question_{{$number}}">{{$data[$number]['question']}}</textarea>
                                            <div style="margin-top: 2%"><span style="margin-right: 1%">A</span><input type="text" name="question_{{$number}}_A" value="{{$data[$number]['answer']['A']}}"></div>
                                            <div style="margin-top: 2%"><span style="margin-right: 1%">B</span><input type="text" name="question_{{$number}}_B" value="{{$data[$number]['answer']['B']}}"></div>
                                            <div style="margin-top: 2%"><span style="margin-right: 1%">C</span><input type="text" name="question_{{$number}}_C" value="{{$data[$number]['answer']['C']}}"></div>
                                            <div style="margin-top: 2%"><span style="margin-right: 1%">D</span><input type="text" name="question_{{$number}}_D" value="{{$data[$number]['answer']['D']}}"></div>
                                            <div style="margin-top: 2%"><span style="margin-right: 1%">Đáp án</span><input type="text" name="answer_{{$number}}" value="{{$data[$number]['correct']}}"></div>
                                        </div>
                                    @endforeach
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
