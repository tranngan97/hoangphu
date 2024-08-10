@extends('master')
@section('content')
    <div class="container">
        <div class="page-content__wrap">
            <div><a href="{{url('bai-thi')}}"><- Quay Lại</a></div>
            <h1>{{$test->slug_name}}</h1>
            <embed
                src="{{URL::to(str_replace('public', 'storage', $test->file_url))}}"
                type="application/pdf"
                frameBorder="0"
                scrolling="auto"
                height="1000"
                width="100%"
                style="margin-top: 5%"
            ></embed>
            @php
                $answers = explode(',', $test->answers);
                $count = count($answers);
            @endphp
            <div class="answer-box" style="margin-top: 5%">
                <form action="" id="answer-form">
                    @for ($i = 0; $i <= $count; $i++)
                        <div class="flex-row" style="gap: 1rem;justify-content: unset">
                            <span>{{$i+1}} - </span>
                            <div>
                                <input type="radio"><span> A</span>
                                <input type="radio"><span> B</span>
                                <input type="radio"><span> C</span>
                                <input type="radio"><span> D</span>
                            </div>
                        </div>
                    @endfor
                    <button style="margin-top: 5%" class="button secondary box-shadow-1-hover" type="submit">Nộp bài</button>
                </form>
            </div>
        </div>
    </div>
@endsection
