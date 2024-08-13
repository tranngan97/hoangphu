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
</head>

<body class="">
<div id="wrapper">
    <header id="header" class="header">
        <div class="header-wrapper">
            {{menu('maintop', 'top_menu')}}
            <div class="header-main" id="masthead">
                <div class="flex-row container">
                    <div id="logo" class="flex-col logo">
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
</div>
</body>
</html>
