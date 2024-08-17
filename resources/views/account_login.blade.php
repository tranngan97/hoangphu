@extends('master')
@section('content')
    <div class="container">
        <div class="page-content__wrap">
            <div class="login-form" style="margin-bottom: 5%">
                <h3>Nếu đã có tài khoản, vui lòng đăng nhập</h3>
                <form role="form"
                      class="form-login"
                      action="{{url('account/login/login')}}"
                      method="POST" enctype="multipart/form-data">
                    <!-- CSRF TOKEN -->
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label" for="email">Email / Số điện thoại</label>
                        <div class="controls">
                            <input id="email" name="email" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">Mật khẩu</label>
                        <div class="controls">
                            <input id="password" name="password" class="form-control" type="password">
                        </div>
                    </div>
                    <button type="submit" style="margin-top: 5%" class="btn btn-primary save">Đăng nhập</button>
                </form>
            </div>
            <div class="register-form">
                <h3>Đăng ký tài khoản mới</h3>
                <form role="form"
                      class="form-login"
                      action="{{url('account/login/register')}}"
                      method="POST" enctype="multipart/form-data">
                    <!-- CSRF TOKEN -->
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label" for="name">Họ và tên</label>
                        <div class="controls">
                            <input id="name" name="name" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input id="email" name="email" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">Mật khẩu</label>
                        <div class="controls">
                            <input id="password" name="password" class="form-control" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="phone">Số điện thoại</label>
                        <div class="controls">
                            <input id="phone" name="phone" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="phone">Ngày sinh</label>
                        <div class="controls">
                            <div class="input-group-login date" id="datepicker-login">
                                <input type="text" name="dob" class="form-control" id="login-date"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary save" style="margin-top: 5%">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
@endsection
