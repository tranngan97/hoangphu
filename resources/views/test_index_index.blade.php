@extends('master')
@section('content')
    <div class="container">
        <div class="page-content__wrap">
            <div class="title-block" style="text-align: center">
                <h3>Danh sách bài thi</h3>
                <p>Hệ thống luyện thi EPS được xây dựng dựa trên các đề thi EPS trước đây và kho đề thi do chính thầy cô tại Du Học BIC với nhiều năm kinh nghiệm đào tạo EPS tổng hợp.</p>
                <p>Hệ thống giúp các học viên EPS được thử sức và trải nghiệm với các câu hỏi trong đề thi EPS, qua đó tự tin hơn với kỳ thi năng lực tiếng Hàn EPS trên con đường Xuất khẩu lao động Hàn Quốc</p>
            </div>
            <div class="test-categories">
                @foreach($ca) @endforeach
            </div>
        </div>
    </div>
@endsection
