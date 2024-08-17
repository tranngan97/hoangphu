@extends('master')
@section('content')
    <div class="container">
        <div class="page-content__wrap">
            <h2>Thông tin tài khoản</h2>
            <div class="panel panel-bordered">
                <!-- form start -->
                <form role="form"
                      class="form-edit-account"
                      action="{{url('account/edit', ['id' => $currentUser->id])}}"
                      method="POST" enctype="multipart/form-data">
                    <!-- CSRF TOKEN -->
                    {{ csrf_field() }}
                    <div class="panel-body" id="account-information-form">
                        <div class="form-group">
                            <label class="control-label" for="name">Họ và tên</label>
                            <div class="controls">
                                <input id="name" name="name" value="{{$currentUser->name}}" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                            <div class="controls">
                                <input id="email" name="email" value="{{$currentUser->email}}" class="form-control" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Mật khẩu</label>
                            <div class="controls">
                                <input id="password" name="password" value="{{$currentUser->password}}" class="form-control" disabled type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="phone">Số điện thoại</label>
                            <div class="controls">
                                <input id="phone" name="phone" class="form-control" value="{{$currentUser->phone}}" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="phone">Ngày sinh</label>
                            <div class="controls">
                                <div class="input-group user-date" id="user-datepicker">
                                    <input type="text" name="dob" class="form-control" @if($currentUser->dob !== NULL) value="{{date('d/m/Y', $currentUser->dob)}}" @endif id="user-datepicker"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer" style="margin-top: 2%">
                        <div class="btn btn-primary" onclick="changePass()">Thay đổi mật khẩu</div>
                        <button type="submit" class="btn btn-primary save">Lưu thay đổi</button>
                    </div>
                </form>
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
