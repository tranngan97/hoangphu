@php
    $currentUser = \Illuminate\Support\Facades\Auth::user();
@endphp
<div class="top-menu-container">
    <ul class="">
        @foreach($items as $menu_item)
            <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
        @endforeach
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
        <li>
            <a href="{{url('bai-thi')}}">
                <span>Bài Thi</span>
            </a>
        </li>
        <li>
            <a href="{{url('/dang-nhap')}}">
                <span> Đăng nhập / Đăng ký</span>
            </a>
        </li>
    </ul>
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
