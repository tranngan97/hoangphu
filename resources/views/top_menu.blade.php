<div class="top-menu-container header-top nav-dark">
    <div class="flex-row container-header">
        <div class="flex-col flex-left">
            <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                @foreach($items as $menu_item)
                    <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
                @endforeach
            </ul>
        </div>
        @php
            $currentUser = \Illuminate\Support\Facades\Auth::user();
        @endphp
        <div class="flex-col flex-right">
            <ul class="nav top-bar-nav nav-right nav-small nav-divided top-buttons">
                @if($currentUser !== NULL && $currentUser->email)
                    <li class="account-html has-dropdown">
                        <span class="name dropdown-toggle" data-toggle="dropdown" style="text-transform: uppercase;">{{$currentUser->name}}</span>
                        <ul class="account-sub-menu">
                            <li class="menu-item ">
                                <a href="" target="_self" style="">
                                    <span>Thông tin tài khoản</span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="" target="_self" style="">
                                    <span>Bài kiểm tra của tôi</span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{url('dang-xuat')}}" target="_self" style="">
                                    <span>Đăng xuất</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                <li class="html header-button-2">
                    <div class="header-button">
                        <a href="{{url('bai-thi')}}" class="button secondary is-xlarge box-shadow-1-hover">
                            <span>Bài Thi</span>
                        </a>
                    </div>
                </li>
                @if(!$currentUser)
                    <li class="html header-button-1">
                        <div class="header-button">
                            <button type="button" class="button success is-xlarge" id="login-button" data-bs-toggle="modal" data-bs-target="#loginModal">
                                Đăng nhập / Đăng ký
                            </button>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>

<div class="modal" id="loginModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute;right: 0;font-size: 20px;">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="flex-row">
                    <div class="popup-image" style="max-width: 50%;">
                        <img src="https://duhochoangphu.com.vn//storage/279540801_1320825471741387_6586347156981394922_n.jpg">
                    </div>
                    <div class="login-form" style="width: 45%;">
                        <nav style="position: absolute; top: 5%;">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Đăng nhập</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Đăng ký</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="login-form" style="padding-top: 2%; width: 90%;">
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
                                        <button type="submit" class="btn btn-primary save" style="margin-top: 2%">Đăng nhập</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="register-form" style="padding-top: 2%; width: 90%;">
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
                                                <div class="input-group date" id="datepicker">
                                                    <input type="text" name="dob" class="form-control" id="date"/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary save" style="margin-top: 2%">Đăng ký</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#loginModal').on('shown.bs.modal', function() {
        $('.input-group.date').datepicker({
            format: "dd/mm/yyyy",
            todayHighlight: true,
            container: '#loginModal #datepicker',
            autoclose: true,
            isInline: false
        }).on('changeDate', function (ev) {
            $(this).datepicker('hide');
        });
    });
</script>
<script type="text/javascript">
    var accountMenu = document.querySelector('.account-html');
    if (accountMenu) {
        accountMenu.addEventListener('mouseenter', function(event) {
            event.target.classList.add('active');
        })
        accountMenu.addEventListener('mouseleave', function(event) {
            event.target.classList.remove('active');
        })
    }
</script>
