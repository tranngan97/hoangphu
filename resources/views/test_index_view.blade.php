@extends('master')
@section('content')
    <div class="container">
        <div class="page-content__wrap">
            <div style="margin-top: 5%; font-size: 2rem; font-weight: 600"><a href="{{url('bai-thi')}}">< Quay Lại</a></div>
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
                $answers = explode(',', $test->answer);
                $count = count($answers);
            @endphp
            <div class="answer-box" style="margin-top: 5%">
                <form action="" id="answer-form" onsubmit="triggerSubmit(event, '{!! $test->answer !!}')">
                    @for ($i = 0; $i < $count; $i++)
                        <fieldset>
                            <legend>Câu {{$i+1}}</legend>
                            <div>
                                <input type="radio" id="{{$i+1}}_A" name="{{$i+1}}_answer" value="A" checked />
                                <label for="{{$i+1}}_A">A</label>
                            </div>
                            <div>
                                <input type="radio" id="{{$i+1}}_B" name="{{$i+1}}_answer" value="B" />
                                <label for="{{$i+1}}_B">B</label>
                            </div>
                            <div>
                                <input type="radio" id="{{$i+1}}_C" name="{{$i+1}}_answer" value="C" />
                                <label for="{{$i+1}}_">C</label>
                            </div>
                            <div>
                                <input type="radio" id="{{$i+1}}_D" name="{{$i+1}}_answer" value="D" />
                                <label for="{{$i+1}}_">D</label>
                            </div>
                        </fieldset>
                    @endfor
                    <button style="margin-top: 5%" class="button secondary" id="submit" type="submit">Nộp bài</button>
                </form>
            </div>
        </div>
    </div>
@endsection
