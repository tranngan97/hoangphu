@php
$tests = \App\Http\Controllers\TestsController::getAllTest();
@endphp
@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing'). ' Bài Thi')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">Bài Thi</h1>
        <a href="{{url('admin/test/create')}}" class="btn btn-success btn-add-new">
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
                                        <th>Phân Loại</th>
                                        <th>Câu hỏi</th>
                                        <th>Câu trả lời</th>
                                        <th>Đáp án</th>
                                        <th class="actions dt-not-orderable">{{ __('voyager::generic.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tests as $test)
                                        <tr>
                                            <td>{{$test['test_id']}}</td>
                                            @php
                                                $categoryName = \App\Http\Controllers\TestsController::getCategoryName($test['category']);
                                            @endphp
                                            <td>{{$categoryName}}</td>
                                            <td>
                                                @php
                                                    $questions = json_decode($test->question, true);
                                                @endphp
                                                @foreach($questions as $number => $question)
                                                    <div><span>{{$number}}.</span><span>{{$question}}</span></div>
                                                @endforeach
                                            </td>
                                            <td>
                                                @php
                                                    $anwsers = json_decode($test->anwser, true);
                                                @endphp
                                                @foreach($anwsers as $number => $anwser)
                                                    <div>
                                                        <span>{{$number}}.</span>
                                                        @foreach ($anwser as $index => $value)
                                                            <span>{{$index}}:</span><span>{{$value}}</span>
                                                        @endforeach
                                                    <div>
                                                @endforeach
                                            </td>
                                            <td>
                                                @php
                                                    $corrects = json_decode($test->correct_anwser, true);
                                                @endphp
                                                @foreach($corrects as $number => $correct)
                                                    <span>{{$number}}.</span><span>{{$correct}}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{url('admin/test/edit', ['id' => $test['test_id']])}}" class="btn btn-primary btn-sm edit">
                                                    <span>{{ __('voyager::generic.edit') }}</span>
                                                </a>
                                                <a href="{{url('admin/test/delete', ['id' => $test['test_id']])}}" class="btn btn-danger btn-sm delete">
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
