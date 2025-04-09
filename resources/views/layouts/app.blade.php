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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');

        body {
            font-family: 'Noto Sans JP', sans-serif;
            background-color: #f5f5f5;
        }

        .coupon-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 15px;
        }

        .category-tabs {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
        }
    </style>
</head>

<body>

    <header class=" bg-[#003a8a] sticky top-0 flex pt-3 text-white flex-col header-custom">
        <div class=" flex justify-center w-full">
            <div class="custom-container flex justify-end gap-6 pr-5">
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

    <div class=" bg-[#f3f0ea] flex justify-center">
        <div class="custom-container flex pt-3 pb-1.5 ">
            <div class=" pr-5">
                <img src="images-r/logo.png " />
            </div>
            <div class=" gap-0 flex bg-catdognav w-[800px] flex-col text-left ">
                <div class="flex justify-end seachbar-custom pt-2 pr-10">
                    <input type=" text" placeholder="キーワードから検索する"
                        class=" bg-gray-50 rounded-l-2xl h-10 placeholder-gray-300 w-52" />
                    <button
                        class="bg-[#f1e3b2] h-10 min-w-12 rounded-r-lg text-gray-600 flex justify-center items-center"
                        onclick="document.searchform_2.submit();">
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
                <div class=" flex justify-end pt-2 text-[#004098] items-baseline text-sm pr-12">
                    掲載希望の施設様&nbsp;
                    <img src="images-r/jp_arrow.gif" class=" h-3"
                        data-src="https://his-coupon.com/wp-content/themes/h-coupon/hcw/images-r/jp_arrow.gif"
                        loading="lazy" class="lazyload">

                </div>
            </div>
        </div>
    </div>

    <div class=" background-coupon-home flex justify-center">
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
                <div class="flex space-x-2">
                    <div class="flex-1 text-center p-4 bg-gray-200 coupon_slider_bg01">
                        <div class=" text-[#0e90d2] text-lg font-extrabold leading-7">
                            <p>動物園･水族館<br>
                                テーマパークはココ！</p>
                        </div>
                    </div>
                    <div class="flex-1 text-center p-4 bg-gray-200 coupon_slider_bg02">
                        <div class=" text-[#0e90d2] text-lg font-extrabold leading-7">
                            <p>美術館･博物館<br>クーポンはコチラ！!</p>
                        </div>
                    </div>
                    <div class="flex-1 text-center p-4 bg-gray-200 coupon_slider_bg03">
                        <div class=" text-[#0e90d2] text-lg font-extrabold leading-7">
                            <p>着物・Wifi</br>レンタルプランはコチラ</< /p>
                        </div>
                    </div>
                    <div class="flex-1 text-center p-4 bg-gray-200 coupon_slider_bg01">
                        <div class=" text-[#0e90d2] text-lg font-extrabold leading-7">
                            <p>人気温泉施設</br>クーポンはコチラ！!</p>
                        </div>
                    </div>
                </div>

            </div>
            <div>
            </div>
        </div>

    </div>

    <div class="flex justify-center bg-[#eeeeee]">
        <div class=" custom-container pt-5 ">

            <div class=" bg-[#a2cbc1] border border-[#d3faee] border-dashed p-2 mb-5">
                <div class="grid grid-cols-5">
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
                </div>


            </div>

            {{-- coupon label --}}
            <div class="coupon-list-title text-xl font-extrabold text-white pt-3 pl-22">
                クーポン一覧
            </div>

            <div class="grid grid-cols-3 gap-7 mt-5 mb-10 px-3">
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
                        <div class=" flex gap-10 mt-5">
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

    <div class=" bg-[#4c84d0] py-8 pt-18  flex justify-center">
        <div class=" custom-container text-center text-xs text-white px-10 text-wrap">
            会社案内・IR情報・リリース | 採用情報 | 営業所案内 | 旅行業約款・条件書 | 個人情報保護方針 | ご利用規約 | 利用ガイド | お問い合わせ | リンクについて
            <br>アクティビティジャパン
        </div>
    </div>

    <div class=" bg-[#004097] flex justify-center">
        <div class=" custom-container text-center text-sm text-white px-5">
            <div class=" flex justify-between items-center">
                <div>
                    <div class=" flex flex-row gap-4">
                        <img src="images-r/coupon-logo-img.png"
                            class="my-3 bg-orange-400 border border-[#c7a800] rounded p-0.5 h-12" />
                        <div class="flex items-center justify-center w-full min-h-full">
                            お得なクーポンをGET
                        </div>
                    </div>
                </div>
                <div>
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