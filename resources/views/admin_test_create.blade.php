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
                                <label class="control-label" for="answer">Câu hỏi:</label><div style="margin-left: 5%;" id="add-question" class="button" onclick="addQuestion()">Thêm câu hỏi</div>
                                <div class="controls" id="question-box">
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
<script type="text/javascript">
    function addQuestion() {
        var questions = document.querySelectorAll('.question-box');
        var number = 1;
        debugger;
        if (questions.length == 0) {
            number = 1;
        } else {
            number = questions.length + 1;
        }
        var html = '<div style="margin-top: 1%" class="question-box">';
        html += '<h4>Câu ' + number + '</h4>' + '<textarea rows="3" style="width: 500px" name="question_' + number + '"></textarea>';
        html += '<div style="margin-top: 2%"><span style="margin-right: 1%">A</span>' + '<input type="text" name="question_' + number + '_A">';
        html += '<span style="margin-left: 2%;margin-right: 1%">B</span>' + '<input type="text" name="question_' + number + '_B">';
        html += '<span style="margin-left: 2%;margin-right: 1%">C</span>' + '<input type="text" name="question_' + number + '_C">';
        html += '<span style="margin-left: 2%; margin-right: 1%">D</span>' + '<input type="text" name="question_' + number + '_D"></div>';
        html += '<div style="margin-top: 2%"><span style="margin-right: 1%">Đáp án</span><input type="text" name="answer_' + number + '"></div>';
        document.getElementById('question-box').innerHTML += html;
    }
</script>
