@extends('master')
@section('content')
    <div class="container">
        <div class="page-content__wrap">
            <div style="margin-top: 5%; font-size: 2rem; font-weight: 600"><a href="{{url('bai-thi')}}">< Quay Lại</a></div>
            <h1>{{$test->slug_name}}</h1>
            <div class="answer-box" style="margin-top: 5%">
                @php
                    $correct = json_decode($test->correct_anwser, true);
                    $newArray = [];
                    foreach ($correct as $key => $value) {
                        $newArray[] = $key.$value;
                    }
                    $answer = implode(',', $newArray);
                @endphp
                <form action="" id="answer-form" onsubmit="triggerSubmit(event, '{!! $answer !!}')">
                    @foreach($data as $number => $questionData)
                        <fieldset>
                            <legend>Câu {{$number}}: {{$data[$number]['question']}}</legend>
                            <div>
                                <input type="radio" id="{{$number}}_A" name="{{$number}}_answer" value="A" checked />
                                <label for="{{$number}}_A">A - {{$data[$number]['answer']['A']}}</label>
                            </div>
                            <div>
                                <input type="radio" id="{{$number}}_B" name="{{$number}}_answer" value="B" />
                                <label for="{{$number}}_B">B - {{$data[$number]['answer']['B']}}</label>
                            </div>
                            <div>
                                <input type="radio" id="{{$number}}_C" name="{{$number}}_answer" value="C" />
                                <label for="{{$number}}_C">C - {{$data[$number]['answer']['C']}}</label>
                            </div>
                            <div>
                                <input type="radio" id="{{$number}}_D" name="{{$number}}_answer" value="D" />
                                <label for="{{$number}}_D">D - {{$data[$number]['answer']['D']}}</label>
                            </div>
                        </fieldset>
                    @endforeach
                    <button style="margin-top: 5%" class="button secondary" id="submit" type="submit">Nộp bài</button>
                </form>
            </div>
        </div>
    </div>
@endsection
