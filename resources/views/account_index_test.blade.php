@extends('master')
@section('content')
    <div class="container">
        <div class="page-content__wrap">
            <h2>Lịch sử kiểm tra</h2>
            <div class="panel panel-bordered">
                <table class="table table-striped" style="vertical-align: middle;text-align: center;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Loại</th>
                            <th>Điểm</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testArray as $test)
                            <tr>
                                <td style="vertical-align: middle;text-align: center;"><a href="/bai-thi/{{$test['slug']}}">{{$test['slug_name']}}</a></td>
                                <td style="vertical-align: middle;text-align: center;">{{$test['category']}}</td>
                                <td style="vertical-align: middle;text-align: center;">{{$test['score']}}</td>
                                <td style="vertical-align: middle;text-align: center;"><button class="btn btn-primary"><a href="/bai-thi/{{$test['slug']}}" style="color: #fff">Làm lại</a></button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript">
    function changePass() {
        if(!document.querySelector('#new_password')) {
            var html = '<div class="form-group"><label class="control-label" for="new_password">Mật khẩu mới</label><div class="controls"><input id="new_password" name="new_password" class="form-control" type="password"></div></div>';
            document.getElementById('account-information-form').innerHTML += html;
        }
    }
</script>
