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
                                        <th>File</th>
                                        <th>Phân Loại</th>
                                        <th>Đáp án</th>
                                        <th class="actions dt-not-orderable">{{ __('voyager::generic.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tests as $test)
                                        <tr>
                                            <td>{{$test['test_id']}}</td>
                                            <td><a href="{{URL::to(str_replace('public', 'storage', $test['file_url']))}}" target="_blank">{{$test['file_name']}}</a></td>
                                            @php
                                                $categoryName = \App\Http\Controllers\TestsController::getCategoryName($test['category']);
                                            @endphp
                                            <td>{{$categoryName}}</td>
                                            <td>{{$test['answer']}}</td>
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
