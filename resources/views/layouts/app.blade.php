<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Meta Tags -->
    <title>{{ $meta['title'] ?? config('app.name') }}</title>
    <meta name="description" content="{{ $meta['description'] ?? 'Default description' }}">
    <meta name="keywords" content="{{ $meta['keywords'] ?? 'laravel, php' }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    @vite('resources/sass/app.scss')
    @vite('resources/css/custom/bootstrap.min.css')
    @vite('resources/css/custom/theme.css')
    {{-- @vite('resources/css/custom/coupon.css') --}}
</head>

<body class="home page-template page-template-front-page page-template-front-page-php page page-id-83">
    <header class="navbar navbar-bright navbar-fixed-top" role="banner" data-spy="affix" data-offset-top="80">
        <div class="container top_header_bg">
            <div class="navbar-header"></div>
            <nav class=" navbar-collapse " role="navigation" id="navbar">
                <ul class="list-inline">

                    <li>
                        <!-- twitterボタン -->
                        <!-- <a href="https://twitter.com/share" data-size="default" class="twitter-share-button"{count}>Tweet</a> -->
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                        <script>
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                        </script>
                        <!-- /twitterボタン -->
                    </li>

                    <li>
                        <!-- facebookボタンコード -->
                        <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "../connect.facebook.net/ja_JP/all.js#xfbml=1";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <!-- /facebookボタンコード -->
                        <!-- facebookボタン -->
                        <div class="fb-like" data-href="https://his-coupon.com/" data-layout="button_count"
                            data-action="like" data-show-faces="false" data-share="false"></div>
                        <!-- /facebookボタン -->
                    </li>

                    <li>
                        <!-- lineボタン -->
                        <span>
                            <a
                                href="https://line.naver.jp/R/msg/text/?%e3%81%8a%e5%be%97%e3%81%aa%e3%82%af%e3%83%bc%e3%83%9d%e3%83%b3%e3%82%92GET|%e3%80%90HIS%e3%82%af%e3%83%bc%e3%83%9d%e3%83%b3%e3%80%91%0D%0Ahttps://his-coupon.com/">
                                <img src="/resource/images/link-icon.png" width="88" height="20" alt="LINEで送る"
                                    data-src="resource/images/link-icon.png" loading="lazy" class="lazyload" />
                                </noscript></a>
                        </span>
                        <!-- /lineボタン -->
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <style>
        #___plusone_0 {
            width: 60px !important;
        }
    </style>

    <div style="height:50px;background-color:#32383e; color: #eee;"></div>
    <div id="masthead">
        <div class="container">
            <div class="row">
                <div class="main-logo col-sm-3 col-xs-12">
                    <a href="index.html"><img src="resource/images/header_logo.gif" alt="HIS"
                            data-src="https://his-coupon.com/wp-content/themes/h-coupon/hcw/images-r/logo.png"
                            loading="lazy" class="lazyload"><noscript><img src="resource/images/header_logo.gif"
                                alt="HIS"></noscript></a>
                </div>
                <!-- Right part -->
                <div class="top-right-all col-sm-offset-5 col-sm-4 col-xs-12">
                    <div class="col-sm-12 col-xs-12 top-right-part">
                        <form role="search" method="get" id="searchform_2" action="https://his-coupon.com/area/">
                            <div class="box col-md-12 col-sm-12 col-xs-12">
                                <div class="container-4">
                                    <input type="text" id="keyword" value="" placeholder="キーワードから検索する" name="s" />
                                    <button class="icon" onclick="document.searchform_2.submit();"><i
                                            class="fa fa-search"></i></button>

                                </div>
                            </div>
                        </form>
                        <!-- search_end -->

                        <!--  join and faq -->
                        <div class="font-jp col-md-12 col-sm-12 col-xs-12">

                            <div class="top_link top_partner">
                                <a href="join/index.html"><span class="on_bg">掲載希望の施設様&nbsp;<img
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            data-src="https://his-coupon.com/wp-content/themes/h-coupon/hcw/images-r/jp_arrow.gif"
                                            loading="lazy" class="lazyload"><noscript><img
                                                src="wp-content/themes/h-coupon/hcw/images-r/jp_arrow.gif"></noscript></span></a>
                            </div>
                        </div>
                        <!--  end of join and faq -->
                    </div>
                </div>
                <!-- End of Right part -->
            </div>
        </div>
        <!-- End of container -->
    </div>

    <div class="info-block">
        <div class="container">
            <div class="col-xs-12 info-area">
                <h3 class=""><span>最新のお知らせ</span></h3>
                <p><a href="coupon/2425824/index.html" target="_blank" rel="noopener"
                        data-saferedirecturl="https://www.google.com/url?q=https://his-coupon.com/coupon/44600/&amp;source=gmail&amp;ust=1662450247640000&amp;usg=AOvVaw0N-Zi92P1Ug4ExDB5BFrrj"><strong>★★★【1,030円引き】屋上天空大露天風呂の天然温泉
                            天成園 入館＋館内利用券 2,000円付き</strong></a><br />
                    テレビで放送、天然温泉と露天風呂が自慢の温泉です。人気の天成園の館内利用券つきお得なプランです♪</p>
                <p><a href="coupon/1451322/index.html" target="_blank" rel="noopener"
                        data-saferedirecturl="https://www.google.com/url?q=https://his-coupon.com/coupon/44600/&amp;source=gmail&amp;ust=1662450247640000&amp;usg=AOvVaw0N-Zi92P1Ug4ExDB5BFrrj"><strong>★★★【最大300円割引】東京湯楽城</strong></a><br />
                    成田空港に近くにある大型温浴施設。癒しの空間で健康増進の湯と別世界の空間を楽しもう♪</p>
            </div>
        </div>
    </div>


    {{-- <main>
        @yield('content')
    </main> --}}
    <!-- Scripts -->
    @viteReactRefresh
    @yield('footer_scripts')
</body>

</html>