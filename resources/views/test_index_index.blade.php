@extends('master')
@section('content')
    <div class="container">
        <div class="page-content__wrap">
            <div class="title-block" style="text-align: center">
                <h3>Danh sách bài thi</h3>
                <p>Hệ thống luyện thi EPS được xây dựng dựa trên các đề thi EPS trước đây và kho đề thi do chính thầy cô tại Du Học BIC với nhiều năm kinh nghiệm đào tạo EPS tổng hợp.</p>
                <p>Hệ thống giúp các học viên EPS được thử sức và trải nghiệm với các câu hỏi trong đề thi EPS, qua đó tự tin hơn với kỳ thi năng lực tiếng Hàn EPS trên con đường Xuất khẩu lao động Hàn Quốc</p>
            </div>
            <div class="test-categories" style="margin-top: 5rem;margin-bottom: 5rem;">
                @foreach($categories as $category)
                    @php
                        $testsByCategory = \App\Http\Controllers\TestsController::getByCategory($category->id);
                    @endphp
                    @if(count($testsByCategory) > 0)
                    <div class="accordion" id="test-category-collapsible-{{$category->id}}">
                        <div class="card">
                            <div class="card-header" id="heading{{$category->id}}">
                                <h5 class="mb-0">
                                    <i class="fa fa-caret-right"></i>
                                    <span style="font-size: 2rem;" class="btn head-trigger" type="button" data-toggle="collapse" data-target="#collapse{{$category->id}}" aria-expanded="true" aria-controls="{{$category->name}}">
                                        {{$category->name}}
                                    </span>
                                </h5>
                            </div>
                            <div id="collapse{{$category->id}}" class="collapse" aria-labelledby="heading{{$category->id}}" data-parent="#test-category-collapsible-{{$category->id}}">
                                <div class="card-body">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($testsByCategory as $test)
                                        <div><a href="{{url('bai-thi', ['slug' => $test->slug])}}">{{$i. '- '. $test->slug_name}}</a></div>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
