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
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header class=" bg-[#003a8a] sticky top-0 flex pt-3 text-white flex-col header-custom">
        <div class=" flex justify-center w-full">
            <div class="custom-container flex justify-center md:justify-end gap-6 pr-5">
                <div class="btn bg-slate-950 rounded-2xl flex items-center gap-1 p-0.5 px-2.5 twitter-icon-text">
                    <i class="fa-brands fa-x-twitter"></i>
                    ポスト
                </div>

                {{-- need to be action to applicable --}}
                <img src='images-r/facebook-action.png' class=" h-5" />

                <img src='images-r/line-icon.png' class=" h-5" />
            </div>
        </div>
        </div>
    </header>

    <div class="bg-[#f3f0ea] flex justify-center">
        <div class="custom-container flex flex-col md:flex-row pt-3 pb-1.5">
            {{-- first div --}}
            <div class="pr-5 flex justify-center md:justify-start">
                <img src="images-r/logo.png" class=" h-max" />
            </div>

            {{-- second div --}}
            <div class="gap-0 flex bg-catdognav w-full md:w-[800px] flex-col text-left mt-3 md:mt-0">
                <div class="flex justify-center md:justify-end seachbar-custom pt-2 md:pr-10">
                    <input type="text" placeholder="キーワードから検索する"
                        class="bg-gray-50 rounded-l-2xl h-10 placeholder-gray-300 w-96 md:w-52" />
                    <button
                        class="bg-[#f1e3b2] h-10 min-w-12 rounded-r-lg text-gray-600 flex justify-center items-center"
                        onclick="document.searchform_2.submit();">
                        <!-- SVG search icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <g fill="none" fill-rule="evenodd">
                                <path
                                    d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor"
                                    d="M5.5 10a4.5 4.5 0 1 1 9 0a4.5 4.5 0 0 1-9 0M10 2.5a7.5 7.5 0 1 0 4.136 13.757l4.803 4.804a1.5 1.5 0 0 0 2.122-2.122l-4.804-4.803A7.5 7.5 0 0 0 10 2.5" />
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="flex justify-end pt-2 text-[#004098] items-baseline text-sm pr-12">
                    掲載希望の施設様&nbsp;
                    <img src="images-r/jp_arrow.gif" class="h-3"
                        data-src="https://his-coupon.com/wp-content/themes/h-coupon/hcw/images-r/jp_arrow.gif"
                        loading="lazy">
                </div>
            </div>
        </div>
    </div>


    <div class=" background-coupon-home  justify-center flex">
        <div class=" custom-container pt-5">
            <div class="rounded p-3 text-[#434343] bg-[#faf9f9] border">
                <span class=" bg-red-600 p-1 pb-2 rounded text-white font-bold mt-1">
                    最新のお知らせ
                </span>
                <p class=" mt-5">
                    <u class=" font-bold ">★★★【1,030円引き】屋上天空大露天風呂の天然温泉 天成園 入館＋館内利用券 2,000円付き</u>
                <p class="mt-1">テレビで放送、天然温泉と露天風呂が自慢の温泉です。人気の天成園の館内利用券つきお得なプランです♪</p>
                </p>

                <p class=" mt-2">
                    <u class=" font-bold">★★★【最大300円割引】東京湯楽城</u>
                <p class="mt-1">成田空港に近くにある大型温浴施設。癒しの空間で健康増進の湯と別世界の空間を楽しもう♪</p>
                </p>
            </div>

            <div class="py-6  pb-26">
                <div class="hidden md:flex space-x-2">
                    <div class="flex-1 text-center p-4 bg-gray-200 coupon_slider_bg01">
                        <div class=" text-[#0e90d2] text-sm xl:text-lg font-extrabold leading-7">
                            <p>動物園･水族館<br>
                                テーマパークはココ！</p>
                        </div>
                    </div>
                    <div class="flex-1 text-center p-4 bg-gray-200 coupon_slider_bg02">
                        <div class=" text-[#0e90d2] text-sm xl:text-lg  font-extrabold leading-7">
                            <p>美術館･博物館<br>クーポンはコチラ！!</p>
                        </div>
                    </div>
                    <div class="flex-1 text-center p-4 bg-gray-200 coupon_slider_bg03">
                        <div class=" text-[#0e90d2] text-sm xl:text-lg  font-extrabold leading-7">
                            <p>着物・Wifi</br>レンタルプランはコチラ</< /p>
                        </div>
                    </div>
                    <div class="flex-1 text-center p-4 bg-gray-200 coupon_slider_bg01">
                        <div class=" text-[#0e90d2] text-sm xl:text-lg  font-extrabold leading-7">
                            <p>人気温泉施設</br>クーポンはコチラ！!</p>
                        </div>
                    </div>
                </div>

            </div>
            <div>
            </div>
        </div>

    </div>


    <div class="flex bg-map-pattern justify-center">
        <div
            class="custom-container border-12 border-[#93b8e8] bg-[#eaf2f7] flex flex-col md:flex-row -mt-20   h-max p-3 min-w-full md:min-w-fit">

            <div class="w-full py-18 px-4 flex md:flex-3/4">
                <svg height="100%" version="1.1" width="100%" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    style="overflow: hidden; position: relative; left: -0.5px; top: -0.9375px;" viewBox="0 0 615 370"
                    preserveAspectRatio="xMidYMid meet">
                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        Created with Raphaël 2.1.4
                    </desc>
                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M378,110.3L377.7,128.7L433,128.3L443.3,136L443.8,176.8L450,176.7L451.2,215.2L524.2,215.2L524.2,158.7L524.8,156.7L532.7,151L532.7,118.6L509.2,108L509.2,91L492.4,91L492.5,107.3L465.4,107.3L465.4,100.7L443.8,100.6L443.3,113.3Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M121,218.3L121.5,237.7L186.3,236.8L191.3,250.7L148.5,250.6L144.3,253L116.1,266L116.1,290.7L220.2,290.7L220.2,250.6L193.5,251L188.3,236.1L188,221.3L173.7,221.3L173.3,217.7Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M36.3,241.3L36.2,260.6L88.3,260.7L90,275.3L20.6,275.9L20.6,308L37.1,308L37,297.3L55,298L55.5,329.7L46.4,334.9L46.4,360.5L63.2,360.3L63.9,353L84.5,353L84.5,365.7L87,365.7L108.8,355.3L108.1,320.4L113.5,316.5L113.5,275.9L92.7,276L89.8,258.4L88.3,243L48,244.3Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M221,218L221.5,239L269.5,239L270,249.5L222,248.5L222,294L268.5,293L268.5,334.5L313.5,334L312.5,283.5L340.2,283.5L340.2,259.6L281.9,259.6L282.5,249L275.5,248L275,234.5L273,228.5L273,220L270.5,217L263,220L256.5,221.5Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M253,178.5L253.5,201.5L321,201.5L323,201.5L327.5,207.5L325,210.5L324.5,228L305,236.5L301.5,241L302,250.5L284.5,250.5L284.3,258L343,258L343,283.5L377.4,283.5L377.4,236.6L378,234.5L391.3,234.5L391.3,208L391,205.5L364.5,220L349.5,220L349,207.5L334.5,207L327.5,194.5L327.5,184L307,178.5Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M296.5,145L297,165.5L382.7,164.5L423.5,188.5L394.5,205.8L394.5,234L394.3,236.6L380,236.6L380,283.5L441,283.1L441.4,258.1L422,257.5L421.8,217L422,214.5L448.7,214.7L448.7,178.5L441.5,178L426.5,186L384,160L382,146.5L340.5,145Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M374.5,41L374,62.5L447.5,62L456.5,67L454.5,69L441,76L441,94L484,95.5L482.5,85L498,85.5L530,100.5L570,86L604,86.5L603,47.5L601,45L574,45.5L503.5,2.5L468,2.5L468,60L464.5,63L450,55.5L451,42Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M52.5,109L52.5,162.5L30.5,162.5L31.5,177.5L100,177.5L98,164.5L60,163.5L59.5,159.5L86.5,159L85,108.5Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M128,312.5L128.5,350L148.5,349.5L159,367.5L225.5,368.5L224,350.5L167.5,349.5L172.5,348.3L181.1,340.6L206,340L215.6,347.3L240.1,347.5L240.5,300.5L194,300.5L192,309L170.5,309L169.5,301Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M316,333.5L337.5,333L336.5,296L351,296.5L351,308L359,307.5L370,334.5L413.5,334.5L414,313.5L368.5,313.5L370,321.5L364,307L415,308L436.5,296.5L436.5,305.5L438,307.5L453.5,307.5L452.4,293L441.3,292.8L441,283.1L315.2,285.3L315,329Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M423,245.3L423,256.8L442.8,257L442.8,291.3L469,292L481.8,313L528.5,314L528.3,296.5L486.3,293.8L478.3,293.5L476.8,292.5L487,292.8L486.5,273L503,273.3L502.8,290.8L533,290.5L532,250L493,249.8L493,243.8L422.8,244Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#e9f1f6" stroke="#000000"
                        d="M424,216L525.2,216L525.2,233.8L535.8,225L535.8,209L609.2,209.3L609.3,229.8L538.3,229.2L525.3,240.2L525.2,245.5L529.7,249.2L494.2,249.2L494,243.3L422.8,242.9L423,215.9Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <a xlink:href="area/coupon_area/00000/A0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#65415b" stroke="#000000"
                            d="M442.9,76.8L442.9,93.4L480.7,93.4L480.7,83.3L498.6,83.2L530.8,98.3L568.9,84L600.6,83.8L600.6,47.2L573.4,47.2L502.4,4.5L469.3,4.5L470.2,61.2L470.5,62.6Z"
                            stroke-width="0" stroke-opacity="1" id="A0000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1; opacity: 1;">
                        </path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/B0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="451.2" y="191.9" width="73" height="23.3" rx="0" ry="0" fill="#b27991" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="B0600"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/B0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#b27991" stroke="#000000" d="M485.7,158.7L486.1,190.4L524.2,190.4L524.2,158.7Z"
                            stroke-width="0" stroke-opacity="1" id="B0300"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/B0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#b27991" stroke="#000000"
                            d="M443.8,158.7L443.8,176.8L451.2,176.8L451.2,190L451.2,190.4L483.1,190.4L483.1,158.7Z"
                            stroke-width="0" stroke-opacity="1" id="B0500"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/B0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="443.8" y="126.7" width="39.2" height="30" rx="0" ry="0" fill="#b27991" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="B4000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/B0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#b27991" stroke="#000000"
                            d="M485.7,126.7L485.7,156.7L524.8,156.7L532.7,151L532.7,126.7Z" stroke-width="0"
                            stroke-opacity="1" id="B0200"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/B0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#b27991" stroke="#000000"
                            d="M443.8,100.6L443.8,125.5L532.7,125.5L532.7,118.6L509.2,108L509.2,91L492.4,91L492.5,107.3L467.4,107.3L465.4,107.3L465.4,100.7Z"
                            stroke-width="0" stroke-opacity="1" id="B0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/C0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="424.4" y="217" width="33.7" height="26.1" rx="0" ry="0" fill="#3d475c" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="C0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/C0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="460.8" y="217" width="31.2" height="26.1" rx="0" ry="0" fill="#3d475c" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="C0200"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/C0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#3d475c" stroke="#000000"
                            d="M494.2,217L494.2,249.2L528.3,249.2L524.5,246.4L524.5,217Z" stroke-width="0"
                            stroke-opacity="1" id="C0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/D0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#77c0d7" stroke="#000000" d="M425.2,244.7L425.2,256.3L491.6,256.3L492,244.7Z"
                            stroke-width="0" stroke-opacity="1" id="D0300"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/D0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="443.9" y="258.5" width="48.1" height="13.4" rx="0" ry="0" fill="#77c0d7" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="D0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/D0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#77c0d7" stroke="#000000"
                            d="M494.2,250.5L494.2,272L504.5,272L504.5,289.9L530.3,289.9L530.3,250.5Z" stroke-width="0"
                            stroke-opacity="1" id="D0400"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/D0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="443.9" y="273.8" width="41" height="17.6" rx="0" ry="0" fill="#77c0d7" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="D0200"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/E0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#bfcba0" stroke="#000000"
                            d="M380,236.6L380,283.5L415.1,283.5L415.8,255.9L421.8,255.9L421.8,217L394.5,217L394.3,236.6Z"
                            stroke-width="0" stroke-opacity="1" id="E0300"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/E0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#bfcba0" stroke="#000000"
                            d="M418.1,258.1L418.1,283.1L418.1,283.5L441,283.1L441.4,258.1Z" stroke-width="0"
                            stroke-opacity="1" id="E0200"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/E0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#bfcba0" stroke="#000000"
                            d="M394.5,205.8L394.5,215L448.7,214.7L448.7,178.5L443.4,178.5Z" stroke-width="0"
                            stroke-opacity="1" id="E0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/F0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#98b9b2" stroke="#000000"
                            d="M315.2,285.3L315.2,331.7L334.5,331.7L334.5,294.1L340.2,294.1L340.2,285.3Z"
                            stroke-width="0" stroke-opacity="1" id="F0300"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/F0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#98b9b2" stroke="#000000"
                            d="M343,285.3L343,294L352.2,294L352.2,305.5L388.1,305.5L388.1,285.3Z" stroke-width="0"
                            stroke-opacity="1" id="F0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/F0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#98b9b2" stroke="#000000"
                            d="M391.2,285.3L391.2,305.5L413.6,305.5L436.2,294.6L438.8,294.6L438.8,305.5L452.4,305.5L452.4,293L441.3,292.8L441.3,285.3Z"
                            stroke-width="0" stroke-opacity="1" id="F0200"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/F0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#98b9b2" stroke="#000000"
                            d="M343,260.7L343,283.5L377.4,283.5L377.4,236.6L349.8,236.6L349.3,260.7Z" stroke-width="0"
                            stroke-opacity="1" id="G0400"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/G0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#548571" stroke="#000000"
                            d="M304.6,241.2L304.6,253.4L284.3,253.4L284.3,258L346.1,258L346.1,241.2Z" stroke-width="0"
                            stroke-opacity="1" id="G0300"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/G0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#548571" stroke="#000000"
                            d="M327.1,209.6L327.1,230.4L306.1,239.3L346.1,239.3L346.1,209.6Z" stroke-width="0"
                            stroke-opacity="1" id="G0200"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/G0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#548571" stroke="#000000"
                            d="M349.1,221.9L349.1,234.5L391.3,234.5L391.3,208L365.1,221.6Z" stroke-width="0"
                            stroke-opacity="1" id="G0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/H0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="222.9" y="250.6" width="34" height="40.1" rx="0" ry="0" fill="#f0c021" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="H0300"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/H0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#f0c021" stroke="#000000"
                            d="M259.9,250.6L259.9,283.5L312.5,283.5L312.5,259.6L281.9,259.6L281.9,250.6Z"
                            stroke-width="0" stroke-opacity="1" id="H0200"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/H0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="315.2" y="259.6" width="24.9" height="23.9" rx="0" ry="0" fill="#f0c021" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="H0400"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/H0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#f0c021" stroke="#000000"
                            d="M291.2,285.3L291.2,317.4L291.2,318.2L312.5,318.2L312.5,285.3Z" stroke-width="0"
                            stroke-opacity="1" id="H0500"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/H0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#f0c021" stroke="#000000"
                            d="M259.9,285.3L259.9,290.7L269.9,290.7L269.9,308.1L289.6,308.1L289.6,285.3Z"
                            stroke-width="0" stroke-opacity="1" id="H0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/H0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#f0c021" stroke="#000000"
                            d="M269.7,310L269.7,331.7L312.5,331.7L312.5,320.9L289.6,320.9L289.6,310Z" stroke-width="0"
                            stroke-opacity="1" id="H0600"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/I0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#dca5a6" stroke="#000000"
                            d="M168.4,303.4L130.3,314.1L130.3,329.6L191.5,329.6L191.5,311.8L168.9,311.5Z"
                            stroke-width="0" stroke-opacity="1" id="I0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/I0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#dca5a6" stroke="#000000"
                            d="M130.3,331L130.3,348.3L172.5,348.3L181.1,340.6L207.6,340.6L215.6,347.3L240.1,347.5L240.1,338L195.6,331Z"
                            stroke-width="0" stroke-opacity="1" id="I0400"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/I0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#dca5a6" stroke="#000000" d="M194.3,329.6L240.1,336.7L240.1,316L194.3,316Z"
                            stroke-width="0" stroke-opacity="1" id="I0300"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/I0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="194.3" y="303.4" width="45.8" height="10.5" rx="0" ry="0" fill="#dca5a6" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="I0200"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/J0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="187.8" y="250.6" width="32.4" height="17.8" rx="0" ry="0" fill="#e3a470" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="J0300"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/J0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#e3a470" stroke="#000000"
                            d="M187.8,270.6L187.8,290.7L220.2,290.7L220.2,269.7L187.8,269.7Z" stroke-width="0"
                            stroke-opacity="1" id="J0200"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/J0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#e3a470" stroke="#000000" d="M116.1,266L116.1,290.7L146.4,290.7L146.4,251.9Z"
                            stroke-width="0" stroke-opacity="1" id="J0500"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/J0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="148.5" y="250.6" width="36.7" height="17.8" rx="0" ry="0" fill="#e3a470" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="J0400"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/J0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#e3a470" stroke="#000000"
                            d="M148.5,271.3L148.5,289.5L148.5,290.7L185.2,290.7L185.2,269.7L148.5,269.7Z"
                            stroke-width="0" stroke-opacity="1" id="J0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/K0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="20.6" y="275.9" width="16.6" height="32.1" rx="0" ry="0" fill="#9f4f4d" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="K0300"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/K0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="40.3" y="275.9" width="18.6" height="21.7" rx="0" ry="0" fill="#9f4f4d" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="K0200"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/K0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#9f4f4d" stroke="#000000"
                            d="M62.5,275.9L62.5,299.7L55.5,299.7L55.5,305.7L87.7,305L87.7,285L113.5,285L113.5,275.9Z"
                            stroke-width="0" stroke-opacity="1" id="K0100"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/K0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#9f4f4d" stroke="#000000"
                            d="M55.5,329.7L46.4,334.9L46.4,336.9L87,336.9L87,306.9L55.5,306.9Z" stroke-width="0"
                            stroke-opacity="1" id="K0600"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/K0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="90.2" y="286.7" width="23.4" height="23.5" rx="0" ry="0" fill="#9f4f4d" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="K0400"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/K0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#9f4f4d" stroke="#000000"
                            d="M90.2,313.4L90.2,342.4L108.1,342.4L108.1,320.4L113.5,316.5L113.5,312.4L90.2,312.4Z"
                            stroke-width="0" stroke-opacity="1" id="K0500"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/K0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <path fill="#9f4f4d" stroke="#000000"
                            d="M63.9,353L84.5,353L84.5,365.7L87,365.7L108.8,355.3L108.8,344.7L87,344.7L87,338.5L46.4,338.5L46.4,360.5L63.2,360.3Z"
                            stroke-width="0" stroke-opacity="1" id="K0700"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    </a>
                    <a xlink:href="area/coupon_area/00000/L0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <rect x="54.5" y="111.4" width="28.5" height="45" rx="0" ry="0" fill="#aeaba6" stroke="#000"
                            stroke-width="0" stroke-opacity="1" id="L0000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    </a>
                    <a xlink:href="area/coupon_area/00000/F0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="395" y="322" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                東海
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/L0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="68" y="168" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                沖縄
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/J0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="148" y="227" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                中国
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/K0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="62" y="249" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                九州
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/H0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="245" y="226" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                関西
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/A0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="413" y="49" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                北海道
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/E0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="335" y="153" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                甲信越
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/G0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="285" y="188" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                北陸
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/C0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="573" y="217" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                北関東
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/D0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="510" y="301" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                関東
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/I0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="195" y="357" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                四国
                            </tspan>
                        </text>
                    </a>
                    <a xlink:href="area/coupon_area/00000/B0000/index.html"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <text x="400" y="122" text-anchor="middle" font-family="'微軟正黑體' ,Arial, Helvetica, sans-serif"
                            font-size="15px" stroke="none" fill="#000000"
                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: 微軟正黑體, Arial, Helvetica, sans-serif; font-size: 15px;">
                            <tspan dy="5.4296875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                東北
                            </tspan>
                        </text>
                    </a>
                    <rect x="36.2" y="258.4" width="53.7" height="2.2" rx="0" ry="0" fill="#9f4f4d" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <rect x="298.7" y="162.3" width="84" height="2.2" rx="0" ry="0" fill="#bfcba0" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <path fill="#bfcba0" stroke="#000000"
                        d="M426.9,188.1C427.2,187.9,427.4,187.7,427.7,187.5L382.5,162.1L381.5,164L425.7,188.8C426,188.6,426.5,188.4,426.9,188.1Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <rect x="256.5" y="198.1" width="70.2" height="1.9" rx="0" ry="0" fill="#548571" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <path fill="#548571" stroke="#000000"
                        d="M333.4,209.7L327.5,198.6C327.2,198.1,326.6,197.9,326.1,198.2C325.6,198.5,325.40000000000003,199.1,325.70000000000005,199.6L331.1,209.79999999999998C331.9,209.6,332.6,209.7,333.4,209.7Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <rect x="223.2" y="235.5" width="49.2" height="2" rx="0" ry="0" fill="#f0c021" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <path fill="#f0c021" stroke="#000000"
                        d="M273,253.1L273,253.1C272.5,253.1,272.1,252.79999999999998,272,252.29999999999998L270.8,236.49999999999997C270.8,235.99999999999997,271.1,235.59999999999997,271.6,235.49999999999997L271.6,235.49999999999997C272.1,235.49999999999997,272.5,235.79999999999998,272.6,236.29999999999998L273.8,252.1C273.9,252.7,273.6,253.1,273,253.1Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <rect x="121.5" y="235.5" width="66" height="2.2" rx="0" ry="0" fill="#e3a470" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <path fill="#e3a470" stroke="#000000"
                        d="M192.9,252.3L192.9,252.3C192.4,252.5,191.8,252.20000000000002,191.6,251.70000000000002L186.29999999999998,236.9C186.1,236.4,186.39999999999998,235.8,186.89999999999998,235.6L186.89999999999998,235.6C187.39999999999998,235.4,187.99999999999997,235.7,188.2,236.2L193.5,251C193.7,251.5,193.5,252.1,192.9,252.3Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <rect x="36.2" y="258.4" width="53.7" height="2.2" rx="0" ry="0" fill="#9f4f4d" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <path fill="#9f4f4d" stroke="#000000"
                        d="M92.1,276L90.3,258.3L88.2,258.5L90,276C90.7,276.1,91.4,276.1,92.1,276Z" stroke-width="0"
                        stroke-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;">
                    </path>
                    <rect x="371.2" y="330.6" width="40.8" height="2" rx="0" ry="0" fill="#98b9b2" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <path fill="#98b9b2" stroke="#000000"
                        d="M371.4,332.4L371.4,332.4C370.9,332.59999999999997,370.4,332.4,370.2,331.9L359.2,305.4C359,304.9,359.2,304.4,359.7,304.2L359.7,304.2C360.2,304,360.7,304.2,360.9,304.7L371.9,331.2C372.1,331.7,371.9,332.2,371.4,332.4Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <rect x="537" y="226" width="71.5" height="2" rx="0" ry="0" fill="#3d475c" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <rect x="521.1" y="231.7" width="18.8" height="2.3" rx="0" ry="0" fill="#3d475c" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        transform="matrix(0.7746,-0.6325,0.6325,0.7746,-27.6723,388.0484)"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <rect x="375.8" y="58.2" width="73.3" height="2.2" rx="0" ry="0" fill="#65415b" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <path fill="#65415b" stroke="#000000"
                        d="M464.1,66L464.1,66L449.1,58.2L448.1,60.2L461.8,67.3C462.5,66.7,463.3,66.3,464.1,66Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#dca5a6" stroke="#000000"
                        d="M219.8,368H162.60000000000002C162.00000000000003,368,161.60000000000002,367.6,161.60000000000002,367L161.60000000000002,367C161.60000000000002,366.4,162.00000000000003,366,162.60000000000002,366H219.8C220.4,366,220.8,366.4,220.8,367L220.8,367C220.8,367.6,220.4,368,219.8,368Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#dca5a6" stroke="#000000"
                        d="M163.1,367.8L163.1,367.8C162.6,368.1,162.1,367.90000000000003,161.79999999999998,367.5L149.49999999999997,347.7C149.19999999999996,347.2,149.39999999999998,346.7,149.79999999999998,346.4L149.79999999999998,346.4C150.29999999999998,346.09999999999997,150.79999999999998,346.29999999999995,151.1,346.7L163.4,366.5C163.7,367,163.6,367.6,163.1,367.8Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <rect x="214.8" y="365.9" width="8.8" height="2" rx="0" ry="0" fill="#dca5a6" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <path fill="#77c0d7" stroke="#000000"
                        d="M525.9,312.8H483.7C483.09999999999997,312.8,482.59999999999997,312.3,482.59999999999997,311.7L482.59999999999997,311.7C482.59999999999997,311.09999999999997,483.09999999999997,310.59999999999997,483.7,310.59999999999997H525.9C526.5,310.59999999999997,527,311.09999999999997,527,311.7L527,311.7C527,312.3,526.5,312.8,525.9,312.8Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <path fill="#77c0d7" stroke="#000000"
                        d="M484,312.6L484,312.6C483.6,312.90000000000003,483,312.70000000000005,482.7,312.3L469.3,290.6C469,290.20000000000005,469.2,289.6,469.6,289.3L469.6,289.3C470,289,470.6,289.2,470.90000000000003,289.6L484.3,311.3C484.5,311.8,484.4,312.4,484,312.6Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                    <rect x="519.9" y="310.7" width="7.1" height="2.2" rx="0" ry="0" fill="#77c0d7" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <rect x="19.7" y="186.8" width="108.5" height="0.8" rx="0" ry="0" fill="#aeaba6" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <rect x="128" y="91" width="0.7" height="96.7" rx="0" ry="0" fill="#aeaba6" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <rect x="373" y="132" width="56.5" height="1.8" rx="0" ry="0" fill="#b27991" stroke="#000"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></rect>
                    <path fill="#b27991" stroke="#000000"
                        d="M443.9,142.7L429.4,132L428.29999999999995,133.5L443.99999999999994,145.1C444,144.3,444,143.5,443.9,142.7Z"
                        stroke-width="0" stroke-opacity="1"
                        style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-opacity: 1;"></path>
                </svg>
            </div>
            <div class=" bg-[#f7e9f9] md:flex-1/4 ">
                <div id="accordion" class="w-full  ">
                    <div class="border-b border-gray-200 ">
                        <button
                            class="accordion-header w-full p-2 hover:cursor-pointer bg-[#f6d9d9] border border-[#dd8585] border-dashed rounded font-extrabold text-[#9d3636]">
                            エリア検索
                        </button>
                        <div
                            class="accordion-content overflow-hidden max-h-0 transition-all duration-300 ease-in-out  text-gray-600 border-t border-[#9d3636] bg-[#f3e9eb] ">
                            <div class="pb-10">
                                <div class=" grid grid-cols-3">
                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/hokkaido.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">北海道</p>
                                        </div>
                                    </div>
                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/tohoku.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">東北</p>
                                        </div>
                                    </div>
                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/kitakanto.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">北関東</p>
                                        </div>
                                    </div>
                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/kanto.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">関東</p>
                                        </div>
                                    </div>
                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/koshinetsu.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">甲信越</p>
                                        </div>
                                    </div>
                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/kitakanto.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">北関東</p>
                                        </div>
                                    </div>
                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/tokai.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">東海</p>
                                        </div>
                                    </div>
                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/hokuriku.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">北陸</p>
                                        </div>
                                    </div>

                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/chugoku.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">中国</p>
                                        </div>
                                    </div>
                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/shikoku.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">四国</p>
                                        </div>
                                    </div>
                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/kyusyu.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">九州</p>
                                        </div>
                                    </div>

                                    <div class=" backround-slider-map flex justify-center p-3">
                                        <div>
                                            <img src=" images-r/maps/okinawa.png" class=" block" />
                                            <p class=" text-xs text-center font-semibold">沖縄</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-b border-gray-200 mt-0.5">
                        <button
                            class="accordion-header w-full p-2 hover:cursor-pointer bg-[#e2edd4] border border-[#93b16d] border-dashed rounded font-extrabold text-[#508b24]">
                            エリア検索
                        </button>
                        <div
                            class="accordion-content overflow-hidden max-h-0 transition-all duration-300 ease-in-out text-gray-600 bg-[#f3e9eb]">
                            <div class="pb-10">
                                <div class=" grid grid-cols-2">
                                    <div class="backround-slider-city">札幌
                                    </div>
                                    <div class="backround-slider-city"> 仙台
                                    </div>
                                    <div class="backround-slider-city">東京都全域
                                    </div>

                                    <div class="backround-slider-city"> 名古屋

                                    </div>
                                    <div class="backround-slider-city"> 大阪府全域

                                    </div>
                                    <div class="backround-slider-city"> 京都

                                    </div>
                                    <div class="backround-slider-city"> 広島

                                    </div>
                                    <div class="backround-slider-city"> 福岡県その他

                                    </div>
                                    <div class="backround-slider-city"> 熊本

                                    </div>
                                    <div class="backround-slider-city"> 沖縄南部
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-b border-gray-200 mt-0.5">
                        <button
                            class="accordion-header w-full p-2 hover:cursor-pointer bg-[#f0e4c8] border border-[#ae7b00] border-dashed rounded font-extrabold text-[#ae7b00]">
                            日本の空港
                        </button>
                        <div
                            class="accordion-content overflow-hidden max-h-0 transition-all duration-300 ease-in-out text-gray-600 bg-[#f3e9eb]">
                            <div class="pb-10">
                                <div class=" grid grid-cols-2">
                                    <div class="backround-slider-airport">
                                        成田空港

                                    </div>
                                    <div class="backround-slider-airport">
                                        羽田空港

                                    </div>
                                    <div class="backround-slider-airport">
                                        関西空港


                                    </div>
                                    <div class="backround-slider-airport"> 中部国際空港


                                    </div>
                                    <div class="backround-slider-airport"> 福岡空港
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-b border-gray-200 mt-0.5">
                        <button
                            class="accordion-header w-full p-2 hover:cursor-pointer bg-[#f1d8f5] border border-[#9444a1] border-dashed rounded font-extrabold text-[#9444a1]">
                            海外
                        </button>
                        <div
                            class="accordion-content overflow-hidden max-h-0 transition-all duration-300 ease-in-out text-gray-600 bg-[#f3e9eb]">
                            <div class="pb-10">
                                <div class=" grid grid-cols-1">
                                    <div class="backround-slider-airport">
                                        アジア

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <script>
                    const headers = document.querySelectorAll(".accordion-header");
              
                headers.forEach((header) => {
                  header.addEventListener("click", () => {
                    const content = header.nextElementSibling;
                    const allContents = document.querySelectorAll(".accordion-content");
              
                    allContents.forEach((el) => {
                      if (el !== content) {
                        el.style.maxHeight = null;
                      }
                    });
              
                    if (content.style.maxHeight) {
                      content.style.maxHeight = null;
                    } else {
                      content.style.maxHeight = content.scrollHeight + "px";
                    }
                  });
                });
                </script>

            </div>
        </div>
    </div>

    <div class="flex justify-center bg-[#eeeeee]">
        <div class=" custom-container pt-5 ">

            <div class=" bg-[#a2cbc1] border border-[#d3faee] border-dashed p-2 mb-5">
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6">
                    <div class="button_all">レジャー・スキー場
                    </div>
                    <div class="button_all">博物館・美術館
                    </div>
                    <div class="button_all"> 温泉・美容・エステ
                    </div>
                    <div class="button_all"> レンタル・車・自転車
                    </div>
                    <div class="button_all">オプショナルツアー
                    </div>
                    <div class="button_all">飲食店・カフェ・喫茶
                    </div>
                    <div class="button_all">ショッピング・両替
                    </div>
                    <div class="button_all">宿泊施設・カラオケ
                    </div>
                    <div class="button_all">動画・アニメ
                    </div>
                    <div class="button_all">ンフレット・チラシ
                    </div>
                    <div class="button_all">ンフレット・チラシ
                    </div>
                    <div class="button_all">ンフレット・チラシ
                    </div>
                </div>


            </div>

            {{-- coupon label --}}
            <div class="coupon-list-title text-xl font-extrabold text-white pt-3 pl-22">
                クーポン一覧
            </div>

            <div class="grid grid-col-1 md:grid-cols-2 lg:grid-cols-3 gap-7 mt-5 mb-10 px-3">
                <div class="flex-1 text-center  bg-white rounded ">
                    <div class="">
                        <div class="flex flex-row justify-between p-4">
                            <div class=" flex flex-row gap-2">
                                <div class=" text-3xl font-black text-gray-300 items-end">1</div>
                                <div class=" font-black text-green-600 ">温泉・美容・エステ</div>
                            </div>
                            <div class="flex flex-row items-end">
                                <img src="images-r/icon_location.png" class="w-5" />
                                <div class="text-xs text-[#0e90d2]">箱根</div>
                            </div>

                        </div>
                        <div class="bg-green-600 py-0.5 flex w-full"></div>
                        <div class=" p-5 flex justify-center flex-col pb-0">
                            <div class=" font-bold text-lg text-gray-600 leading-6">
                                【日帰り温泉入館料６００円割引】 屋上天空大露天風呂の天然温泉 天成園
                            </div>
                            <img src="images-r/card-example-image.png" class="mt-4 px-2" />
                            <div class="  text-gray-600 py-6 font-bold">
                                日帰り温泉入館料　６００円割引
                            </div>

                        </div>
                        <div class="px-2 pb-3">
                            <div class=" bg-[#f4f9ff] border border-[#5f7ba2] border-dashed py-4 rounded text-lg">
                                ダウンロード枚数 <span class=" text-red-400 text-2xl">0</span>
                            </div>

                            <div class=" text-white bg-[#e04a4a] mt-2 text-lg font-bold">
                                有効期限
                            </div>

                            <div class=" text-[#e24242] bg-[#fff6f6] text-lg py-2">
                                2026/04/01
                            </div>
                            <div class="flex justify-center">
                                <img src="images-r/coupon-image.png"
                                    class="my-3 bg-[#ffd700] border border-[#c7a800] rounded p-0.5" />
                            </div>
                            <button class=" btn bg-[#ee1414] text-white w-full rounded-md text-lg py-1">
                                詳細を見る！
                            </button>
                        </div>


                    </div>
                </div>

                <div class="flex-1 text-center  bg-white rounded ">
                    <div class="">
                        <div class="flex flex-row justify-between p-4">
                            <div class=" flex flex-row gap-2">
                                <div class=" text-3xl font-black text-gray-300 items-end">1</div>
                                <div class=" font-black text-green-600 ">温泉・美容・エステ</div>
                            </div>
                            <div class="flex flex-row items-end">
                                <img src="images-r/icon_location.png" class="w-5" />
                                <div class="text-xs text-[#0e90d2]">箱根</div>
                            </div>

                        </div>
                        <div class="bg-green-600 py-0.5 flex w-full"></div>
                        <div class=" p-5 flex justify-center flex-col pb-0">
                            <div class=" font-bold text-lg text-gray-600 leading-6">
                                【日帰り温泉入館料６００円割引】 屋上天空大露天風呂の天然温泉 天成園
                            </div>
                            <img src="images-r/card-example-image.png" class="mt-4 px-2" />
                            <div class="  text-gray-600 py-6 font-bold">
                                日帰り温泉入館料　６００円割引
                            </div>

                        </div>
                        <div class="px-2 pb-3">
                            <div class=" bg-[#f4f9ff] border border-[#5f7ba2] border-dashed py-4 rounded text-lg">
                                ダウンロード枚数 <span class=" text-red-400 text-2xl">0</span>
                            </div>

                            <div class=" text-white bg-[#e04a4a] mt-2 text-lg font-bold">
                                有効期限
                            </div>

                            <div class=" text-[#e24242] bg-[#fff6f6] text-lg py-2">
                                2026/04/01
                            </div>
                            <div class="flex justify-center">
                                <img src="images-r/coupon-image.png"
                                    class="my-3 bg-[#ffd700] border border-[#c7a800] rounded p-0.5" />
                            </div>
                            <button class=" btn bg-[#ee1414] text-white w-full rounded-md text-lg py-1">
                                詳細を見る！
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex-1 text-center  bg-white rounded ">
                    <div class="">
                        <div class="flex flex-row justify-between p-4">
                            <div class=" flex flex-row gap-2">
                                <div class=" text-3xl font-black text-gray-300 items-end">3</div>
                                <div class=" font-black text-pink-600 ">温泉・美容・エステ</div>
                            </div>
                            <div class="flex flex-row items-end">
                                <img src="images-r/icon_location.png" class="w-5" />
                                <div class="text-xs text-[#0e90d2]">箱根</div>
                            </div>

                        </div>
                        <div class="bg-pink-600 py-0.5 flex w-full"></div>
                        <div class=" p-5 flex justify-center flex-col pb-0">
                            <div class=" font-bold text-lg text-gray-600 leading-6">
                                【最大200円割引】伊豆シャボテン動物公園　※1日30組限定
                            </div>
                            <img src="images-r/pink-bg.png" class="mt-4 px-2" />
                            <div class="  text-gray-600 py-6 font-bold">
                                最大200円割引【1日30組限定】※0枚になり次第終了
                            </div>

                        </div>

                        <div class="px-2 pb-3">
                            <div class=" bg-[#f4f9ff] border border-[#5f7ba2] border-dashed py-1 rounded text-base">
                                残り時間 11:12:41
                            </div>
                            <div class=" bg-[#f4f9ff] border border-[#5f7ba2] border-dashed py-1 rounded text-base">
                                残り枚数 30 / 発行枚数 30
                            </div>

                            <div class="text-[#e24242] bg-[#fff6f6] text-lg mt-3">
                                <div class="flex">
                                    <div class="min-w-16 text-lg font-bold bg-[#e04a4a] text-white p-2">
                                        有効<br>期限
                                    </div>
                                    <div class="flex items-center justify-center w-full min-h-full text-left px-2">
                                        2025/04/09 00:00～
                                        2025/04/09 23:59
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-center">
                                <img src="images-r/printer-icon.png"
                                    class="my-3 bg-orange-400 border border-[#c7a800] rounded p-0.5" />
                            </div>
                            <button class=" btn bg-[#ee1414] text-white w-full rounded-md text-lg py-1">
                                詳細を見る！
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div class=" flex justify-center flex-row pb-10">
                <div>
                    <div class=" text-center font-extrabold">
                        ▼アイコンの説明
                    </div>
                    <div class=" text-sm">
                        <div class=" flex flex-col md:flex-row  md:gap-10 mt-5">
                            <div class=" flex flex-row gap-4">
                                <img src="images-r/printer-icon.png"
                                    class="my-3 bg-orange-400 border border-[#c7a800] rounded p-0.5" />
                                <div class="flex items-center justify-center w-full min-h-full">
                                    印刷限定
                                </div>
                            </div>

                            <div class=" flex flex-row gap-4">
                                <img src="images-r/zoom-icon.png"
                                    class="my-3 bg-[#168fff] border border-[#c7a800] rounded p-0.5" />
                                <div class="flex items-center justify-center w-full min-h-full">
                                    動画
                                </div>
                            </div>

                            <div class=" flex flex-row gap-4">
                                <img src="images-r/coupon-image.png"
                                    class="my-3 bg-[#ffd700] border border-[#c7a800] rounded p-0.5" />
                                <div class="flex items-center justify-center w-full min-h-full">
                                    カード利用可
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" bg-[#4c84d0] py-8 md:pt-18  flex justify-center">
        <div class=" custom-container text-center text-xs text-white px-10 text-wrap">
            会社案内・IR情報・リリース | 採用情報 | 営業所案内 | 旅行業約款・条件書 | 個人情報保護方針 | ご利用規約 | 利用ガイド | お問い合わせ | リンクについて
            <br>アクティビティジャパン
        </div>
    </div>

    <div class=" bg-[#004097] flex justify-center">
        <div class=" custom-container text-center text-sm text-white px-5">
            <div class=" flex flex-col md:flex-row justify-between items-center">
                <div>
                    <div class=" flex flex-col md:flex-row gap-4">
                        <img src="images-r/coupon-logo-img.png"
                            class="my-3 bg-orange-400 border border-[#c7a800] rounded p-0.5 h-12" />
                        <div class="flex items-center justify-center w-full min-h-full -mt-3 md:-mt-0">
                            お得なクーポンをGET
                        </div>
                    </div>
                </div>
                <div class=" my-5 md:my-0">
                    Copyright © HIS Co.,Ltd. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>

    <div class=" bg-[#4c84d0] py-2.5 flex justify-center">

    </div>


    <!-- Scripts -->
    @viteReactRefresh
    @vite('resources/js/app.js')
    @yield('footer_scripts')
</body>

</html>