<div class="top-menu-container header-top nav-dark">
    <div class="flex-row container">
        <div class="flex-col flex-left">
            <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                @foreach($items as $menu_item)
                    <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="flex-col flex-right">
            <ul class="nav top-bar-nav nav-right nav-small nav-divided top-buttons">
                <li class="html header-button-2">
                    <div class="header-button">
                        <a href="https://duhocbic.net/danh-sach-bai-thi/" class="button secondary is-xlarge box-shadow-1-hover">
                            <span>Bai thi</span>
                        </a>
                    </div>
                </li>
                <li class="html header-button-1">
                    <div class="header-button">
                        <a href="#dang-ky-tu-van" class="button success is-xlarge">
                            <span>ĐĂNG KÝ NGAY</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
