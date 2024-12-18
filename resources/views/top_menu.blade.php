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
                                <a href="{{URL::to('/tai-khoan')}}" target="_self" style="">
                                    <span>Thông tin tài khoản</span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{URL::to('/lich-su-bai-thi')}}" target="_self" style="">
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
