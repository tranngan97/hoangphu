<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @yield('title')
    @section('description')
        <title>Du Học Và XKLD Hoàng Phú</title>
    @endsection
    @yield('description')
    @yield('keywords')
    @section('description')
        <meta name="description" content="Du Học Và XKLD Hoàng Phú"/>
    @endsection
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="{{ asset('/css/boostrap.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('/js/jquery.min.js') }}"></script>
    <script src="{{asset('/js/datepicker.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="icon" type="image/x-icon" href="https://duhochoangphu.com.vn//storage/359836944_766592068802819_4378199925933335674_n.jpg">
</head>

<body class="">
<div id="wrapper">
    <header id="header" class="header">
        <div class="header-wrapper">
            {{menu('maintop', 'top_menu')}}
            <div class="header-main" id="masthead">
                <div class="flex-row container col d-xl-none d-xxl-block">
                    <div id="logo" class="flex-col logo col-md-12">
                        <!-- Header logo -->
                        <a href="https://duhochoangphu.com.vn/" title="Du Học Và XKLD Hoàng Phú" rel="home">
                            <img src="https://duhochoangphu.com.vn//storage/359836944_766592068802819_4378199925933335674_n.jpg" class="header_logo header-logo" alt="Du học và xuất khẩu lao động BIC">
                        </a>
                    </div>
                    <div class="flex-col">
                        {{menu('main', 'header_menu')}}
                    </div>
                </div>
            </div>
            @yield('main-banner')
        </div>
    </header>
    <main id="main" class="">
        <div id="content" role="main" class="content-area">
            @yield('content')
        </div>
    </main>
    <footer id="footer" class="footer-wrapper">
        <section class="section footerbic dark">
            <div class="row row-full-width" style="padding-top: 3%">
                <div class="col col-md-1"></div>
                <div id="col-15727256" class="col col-md-2">
                    <div class="col-inner text-left dark">
                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_347332422">
                            <div class="img-inner dark">
                                <img width="200" src="https://duhochoangphu.com.vn//storage/359836944_766592068802819_4378199925933335674_n.jpg" alt="">
                            </div>
                        </div>
                        <div class="text" style="text-align: center">
                            <span style="font-size: 0.8rem;">CÔNG TY TNHH HOÀNG PHÚ VIỆT NAM</span>
                        </div>
                    </div>
                </div>
                <div class="col col-md-2">
                    <div class="col-inner">
                        <div class="ux-menu stack stack-col justify-start ux-menu--divider-solid">
                            <div class="ux-menu-title flex">Du học Hoàng Phú</div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/chuong-trinh/du-hoc-han-quoc-2021/">
                                    <span class="ux-menu-link__text">Du học Hàn Quốc</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/chuong-trinh/du-hoc-nhat-ban-2/">
                                    <span class="ux-menu-link__text">Du học Nhật Bản</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/du-hoc-dai-loan-2/">
                                    <span class="ux-menu-link__text">Du học Đài Loan</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/du-hoc-trung-quoc/">
                                    <span class="ux-menu-link__text">Du học Đức</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/du-hoc-duc-2/">
                                    <span class="ux-menu-link__text">Du học Úc</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-1959173211" class="col col-md-2">
                    <div class="col-inner">
                        <div class="ux-menu stack stack-col justify-start ux-menu--divider-solid">
                            <div class="ux-menu-title flex">XKLĐ Hoàng Phú</div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/xuat-khau-lao-dong-han-quoc-2/">
                                    <span class="ux-menu-link__text">XKLĐ Hàn Quốc</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/chuong-trinh/xuat-khau-lao-dong-nhat-ban-2/">
                                    <span class="ux-menu-link__text">XKLĐ Nhật Bản</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/chuong-trinh/xuat-khau-lao-dong-dai-loan-2/">
                                    <span class="ux-menu-link__text">XKLĐ Đài Loan</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/xuat-khau-lao-dong-trung-quoc/">
                                    <span class="ux-menu-link__text">XKLĐ Đức</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/xuat-khau-lao-dong-duc/">
                                    <span class="ux-menu-link__text">XKLĐ Úc</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/xuat-khau-lao-dong-duc/">
                                    <span class="ux-menu-link__text">XKLĐ Châu Âu</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-36019025" class="col col-md-2">
                    <div class="col-inner">
                        <div class="ux-menu stack stack-col justify-start ux-menu--divider-solid">
                            <div class="ux-menu-title flex">Đào tạo</div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/dao-tao-tieng-han/">
                                    <span class="ux-menu-link__text">Đào tạo tiếng Hàn</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net/tin-tuc/dao-tao-tieng-nhat/">
                                    <span class="ux-menu-link__text">Đào tạo tiếng Nhật</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net">
                                    <span class="ux-menu-link__text">Đào tạo tiếng Đức</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net">
                                    <span class="ux-menu-link__text">Đào tạo tiếng Trung</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net">
                                    <span class="ux-menu-link__text">Đào tạo tiếng Anh</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net">
                                    <span class="ux-menu-link__text">English Kids</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net">
                                    <span class="ux-menu-link__text">Tiền tiểu học</span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://duhocbic.net">
                                    <span class="ux-menu-link__text">Toán nhanh Soroban</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-2001932309" class="col col-md-2">
                    <div class="col-inner">
                        <div class="ux-menu stack stack-col justify-start">
                            <div class="ux-menu-title" style="padding-top: 4%;">Kết nối với Hoàng Phú</div>
                            <div class="ux-menu-link menu-item">
                                <a href="https://www.facebook.com/duhocxkldhoangphu" target="_blank">
                                    <i class="fa-brands fa-3x fa-square-facebook" style="margin-right: 1rem"></i>
                                </a>
                                <a href="mailto:duhoc-xkldhoangphu@gmail.com" target="_blank">
                                    <i class="fa-brands fa-3x fa-tiktok" style="margin-right: 1rem"></i>
                                </a>
                                <a href="https://maps.app.goo.gl/aSywjEhYnRBCk7u89" target="_blank">
                                    <i class="fa-brands fa-3x fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-1"></div>
            </div>
        </section>
    </footer>
    <div class="contact-box-bottom animate__backInRight contact1">
        <a class="contact-box-wrapper nut-chat-facebook" href="https://www.facebook.com/duhocbicvietnam" target="_blank" style="opacity: 1;">
            <div class="contact-icon-box" style="border: none;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800"><radialGradient id="a" cx="101.9" cy="809" r="1.1" gradientTransform="matrix(800 0 0 -800 -81386 648000)" gradientUnits="userSpaceOnUse"><stop offset="0" style="stop-color:#09f"></stop><stop offset=".6" style="stop-color:#a033ff"></stop><stop offset=".9" style="stop-color:#ff5280"></stop><stop offset="1" style="stop-color:#ff7061"></stop></radialGradient><path fill="url(#a)" d="M400 0C174.7 0 0 165.1 0 388c0 116.6 47.8 217.4 125.6 287 6.5 5.8 10.5 14 10.7 22.8l2.2 71.2a32 32 0 0 0 44.9 28.3l79.4-35c6.7-3 14.3-3.5 21.4-1.6 36.5 10 75.3 15.4 115.8 15.4 225.3 0 400-165.1 400-388S625.3 0 400 0z"></path><path fill="#FFF" d="m159.8 501.5 117.5-186.4a60 60 0 0 1 86.8-16l93.5 70.1a24 24 0 0 0 28.9-.1l126.2-95.8c16.8-12.8 38.8 7.4 27.6 25.3L522.7 484.9a60 60 0 0 1-86.8 16l-93.5-70.1a24 24 0 0 0-28.9.1l-126.2 95.8c-16.8 12.8-38.8-7.3-27.5-25.2z"></path>
                </svg></div>
            <div class="contact-info">
                <b>Facebook</b>
                <span>08:00 - 21:00</span>
            </div>
        </a>
        <a class="contact-box-wrapper nut-chat-zalo" href="https://zalo.me/0969281355" target="_blank" style="opacity: 1;">
            <div class="contact-icon-box" style="border: none;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 161.5 161.5"><path d="M504.54,431.79h14.31c19.66,0,31.15,2.89,41.35,8.36a56.65,56.65,0,0,1,23.65,23.65c5.47,10.2,8.36,21.69,8.36,41.35V519.4c0,19.66-2.89,31.15-8.36,41.35a56.65,56.65,0,0,1-23.65,23.65c-10.2,5.47-21.69,8.36-41.35,8.36H504.6c-19.66,0-31.15-2.89-41.35-8.36a56.65,56.65,0,0,1-23.65-23.65c-5.47-10.2-8.36-21.69-8.36-41.35V505.14c0-19.66,2.89-31.15,8.36-41.35a56.65,56.65,0,0,1,23.65-23.65C473.39,434.68,484.94,431.79,504.54,431.79Z" transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path><path d="M592.21,517v2.35c0,19.66-2.89,31.15-8.35,41.35a56.65,56.65,0,0,1-23.65,23.65c-10.2,5.47-21.69,8.36-41.35,8.36H504.6c-16.09,0-26.7-1.93-35.62-5.63L454.29,572Z" transform="translate(-431.25 -431.25)" style="fill:#001a33;opacity:0.11999999731779099;isolation:isolate"></path><path d="M455.92,572.51c7.53.83,16.94-1.31,23.62-4.56,29,16,74.38,15.27,101.84-2.3q1.6-2.4,3-5c5.49-10.24,8.39-21.77,8.39-41.5v-14.3c0-19.73-2.9-31.26-8.39-41.5a56.86,56.86,0,0,0-23.74-23.74c-10.24-5.49-21.77-8.39-41.5-8.39H504.76c-16.8,0-27.71,2.12-36.88,6.15q-.75.67-1.47,1.37c-26.89,25.92-28.93,82.11-6.13,112.64l.08.14c3.51,5.18.12,14.24-5.18,19.55C454.32,571.89,454.63,572.39,455.92,572.51Z" transform="translate(-431.25 -431.25)" style="fill:#fff"></path><path d="M497.35,486.34H465.84v6.76h21.87l-21.56,26.72a6.06,6.06,0,0,0-1.17,4v1.72h29.73a2.73,2.73,0,0,0,2.7-2.7v-3.62h-23l20.27-25.43,1.11-1.35.12-.18a8,8,0,0,0,1.41-5Z" transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path><path d="M537.47,525.54H542v-39.2h-6.76v36.92A2.27,2.27,0,0,0,537.47,525.54Z" transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path><path d="M514.37,495.07a15.36,15.36,0,1,0,15.36,15.36A15.36,15.36,0,0,0,514.37,495.07Zm0,24.39a9,9,0,1,1,9-9A9,9,0,0,1,514.37,519.46Z" transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path><path d="M561.92,494.82A15.48,15.48,0,1,0,577.4,510.3,15.5,15.5,0,0,0,561.92,494.82Zm0,24.64a9.09,9.09,0,1,1,9.09-9.09A9.07,9.07,0,0,1,561.92,519.46Z" transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path><path d="M526.17,525.54h3.62V495.93h-6.33v27A2.72,2.72,0,0,0,526.17,525.54Z" transform="translate(-431.25 -431.25)" style="fill:#0068ff"></path></svg></div>
            <div class="contact-info">
                <b>Zalo</b>
                <span>08:00 - 21:00</span>
            </div>
        </a>
        <a class="contact-box-wrapper nut-goi-hotline" href="tel:0969281355" style="opacity: 1;">
            <div class="contact-icon-box phone" style="color: #ed1b24;"> <img src="https://duhocbic.net/wp-content/plugins/lienhe-dongnam/images/button-contact-3399-2.jpg" alt="Gọi ngay"> </div>
            <div class="contact-info">
                <b>0969281355</b>
                <span>08:00 - 21:00</span>
            </div>
        </a>
    </div>
</div>
</body>
</html>
