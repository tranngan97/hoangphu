<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Tối ưu hóa công cụ tìm kiếm bởi Rank Math - https://rankmath.com/ -->
    <title>Du Học Và XKLD Hoàng Phú</title>
    <meta name="description" content="Chương trình Visa E9 hay còn gọi là chương trình EPS-Topik."/>
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('/css/boostrap.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body class="">
<div id="wrapper">
    <header id="header" class="header">
        <div class="header-wrapper">
            {{menu('maintop', 'top_menu')}}
            <div class="header-main" id="masthead">
                <div class="flex-row container" style="margin-top: 1rem;margin-bottom: 1rem;">
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
            <div class="bg section-bg fill bg-fill bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="row">
                    <div id="col-15727256" class="col medium-3 small-12 large-3">
                        <div class="col-inner text-left dark">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_347332422">
                                <div class="img-inner dark">
                                    <img width="200" src="https://duhochoangphu.com.vn//storage/359836944_766592068802819_4378199925933335674_n.jpg" alt="">
                                </div>
                            </div>
                            <div class="text">
                                <h4>Du Học Và XKLD Hoàng Phú</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col medium-2 small-12 large-2">
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
                                        <span class="ux-menu-link__text">Du học Trung Quốc</span>
                                    </a>
                                </div>
                                <div class="ux-menu-link flex menu-item">
                                    <a class="ux-menu-link__link flex" href="https://duhocbic.net/du-hoc-duc-2/">
                                        <span class="ux-menu-link__text">Du học Đức</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-1959173211" class="col medium-2 small-12 large-2">
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
                                        <span class="ux-menu-link__text">XKLĐ Trung Quốc</span>
                                    </a>
                                </div>
                                <div class="ux-menu-link flex menu-item">
                                    <a class="ux-menu-link__link flex" href="https://duhocbic.net/xuat-khau-lao-dong-duc/">
                                        <span class="ux-menu-link__text">XKLĐ Đức</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-36019025" class="col medium-2 small-12 large-2">
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
                            </div>
                        </div>
                    </div>
                    <div id="col-2001932309" class="col medium-3 small-12 large-3">
                        <div class="col-inner">
                            <div class="ux-menu stack stack-col justify-start">
                                <div class="ux-menu-title">Kết nối với Hoàng Phú</div>
                                <div class="ux-menu-link menu-item">
                                    <i class="fa fa-facebook" style="margin-right: 1rem;"></i>
                                    <a href="https://www.facebook.com/duhocxkldhoangphu" target="_blank">Follow on Facebook</a>
                                </div>
                                <div class="ux-menu-link menu-item">
                                    <i class="fa fa-at" style="margin-right: 1rem;"></i>
                                    <a href="mailto:duhoc-xkldhoangphu@gmail.com" target="_blank">duhoc-xkldhoangphu@gmail.com</a>
                                </div>
                                <div class="ux-menu-link menu-item">
                                    <i class="fa fa-location-arrow" style="margin-right: 1rem;"></i>
                                    <a href="https://maps.app.goo.gl/aSywjEhYnRBCk7u89" target="_blank">Khu đô thị ghẽ, Cẩm Giàng, Hải Dương, Việt Nam</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</div>
</body>
</html>
