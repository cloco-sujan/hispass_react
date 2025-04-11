@extends('layouts.app')

@section('content')
<x-header />
<x-nav-bar />

<div class=" background-coupon-home  justify-center flex">
    <div class=" custom-container px-5 pt-5">
        <div class=" bg-[#f1f1f1] p-3">
            <div class=" border border-[#DDD] p-2 ">
                <p class=" text-[#f00] text-xs text-center font-black">下記クーポンの記載をご確認後、ご活用ください。
                    利用施設により、印刷が【必要】です。</p>
            </div>
        </div>
        <div class="flex mb-10 mt-5 bg-[#ebe9e4] shadow p-4 text-sm font-semibold">
            <span class=" text-[#1959b1]">ホーム > 関東 > 神奈川県 > 箱根 > </span>【1,030円引き】屋上天空大露天風呂の天然温泉 天成園 入館＋館内利用券 2,000円付き
        </div>
    </div>
</div>

<div class=" bg-[#eeeeee] flex justify-center">
    <div class=" custom-container py-5 ">
        <div class=" flex justify-center w-full">
            <div class=" bg-[#ff5b54] text-white text-2xl p-4 px-10 rounded-3xl shadow-xl 0">
                クーポンをGET！
            </div>

        </div>
        <p class=" text-center mt-8 text-[#ff0000]">「クーポンGET!これから行く！」ボタンからクーポン発行画面にてスクリーンショットをお勧めいたします。</p>
    </div>
</div>

<div class=" bg-[#17519f] flex justify-center">
    <div class=" custom-container py-3 ">
        <div class=" bg-dolphine-img text-center text-2xl text-[#f4ad1f]">クーポン内容
        </div>
    </div>
</div>

<div class=" flex justify-center ">
    <div class=" custom-container">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 py-5 w-full px-2">
            <!-- First section: Location and tag -->
            <div class="flex justify-center md:justify-start">
                <div class="flex flex-col md:flex-row md:items-center gap-2">
                    <div class="flex items-end justify-center">
                        <img src="images-r/icon_location.png" class="w-5 mr-1" alt="Location Icon" />
                        <span class="text-sm font-semibold">箱根</span>
                    </div>
                    <span class="text-sm bg-[#8abe53] p-1.5 text-white rounded ml-0 mt-4 md:ml-3 md:mt-0">
                        温泉・美容・エステ
                    </span>
                </div>
            </div>

            <!-- Second section: Title -->
            <div class="md:col-span-2 text-center md:text-left flex items-center">
                <p class="text-base font-medium">
                    【1,030円引き】屋上天空大露天風呂の天然温泉 天成園 入館＋館内利用券 2,000円付き
                </p>
            </div>

            <!-- Third section: Download Info -->
            <div class="w-full md:w-auto">
                <div class="flex flex-col text-center cupon-div-bg p-4">
                    <div class="py-4 bg-[#f4f9ff] text-lg font-semibold">
                        ダウンロード枚数 1
                    </div>
                    <div class="py-1 bg-[#e04a4a] text-white font-semibold">
                        有効期限
                    </div>
                    <div class="py-6 bg-[#fff6f6] text-[#f1784a] text-xl font-bold">
                        2026/04/01
                    </div>
                </div>
            </div>

            <!-- Fourth section: Image -->
            <div class="md:col-span-2">
                <!-- You can replace with a carousel later -->
                <img src="images-r/card-example-image.png" class="mt-4 w-full h-52 object-cover rounded-md"
                    alt="Card Image" />
            </div>
        </div>


        <div class=" bg-[#dedede] p-3">
            <div class="flex flex-row items-end ">
                <img src="images-r/bird-icon.png" class="w-5 mr-1" />
                <div class="text-sm">箱根</div>
            </div>
        </div>

        <div class=" mt-5 bg-[#f3efd6] text-center p-10 rounded-4xl border-2 border-[#f1da6d] text-2xl text-gray-700">
            入館+館内利用券2,000円付きプラン
        </div>

        <div class=" p-5 mt-5 px-2 text-gray-700">
            <div>
                入館はもちろん、館内で使える2,000円利用がついたお得なセット！！<br>
                お食事・お飲み物・デザートはもちろん、売店・ウェルネスなどに使えます。
            </div>
            <div class=" my-8">
                【1,030円引き】<br>
                通常価格 2730円＋館内利用券 2,000円 ＝4,730円から1,030円引き　⇒　3,700円　
            </div>
            <ul>
                <li>
                    ＊クーポン１枚につき２名様まで有効 ＊他の割引券との併用不可
                </li>
                <li>
                    ＊会計前にご提出をお願いします。（会計後のご利用は不可）
                </li>
                <li>
                    ※ご利用の際は事前に営業時間・定休日等をご自身でご確認の上おでかけください。
                </li>
                <li>
                    ※飲食物の持ち込み不可。てんせいまぁと9:00～21:00、お食事処「憩い処」11：30～21：00（LO20:00）/茶屋「玉だれ庵」11：00～15：00（土・日・祝日のみ営業）/カフェ「プルミエール」10：00～16：00、瀧ラウンジは団体様向け営業のみ、癒し処11:00～24:00（全日）
                </li>
                <li>
                    ※24:00以降でも施術終了まで対応、あかすり定休日なしで営業中
                </li>
            </ul>
        </div>

        <div class=" text-[#1959b1] ml-5">
            【日帰り温泉入館料６００円割引】 屋上天空大露天風呂の天然温泉 天成園のクーポンはコチラ
        </div>

        <div class=" bg-[#dedede] p-3 mt-5">
            <div class="flex flex-row items-end ">
                <img src="images-r/bird-icon.png" class="w-5 mr-1" />
                <div class="text-sm">詳細を見る！</div>
            </div>
        </div>
        <div class=" text-sm  bg-[#f3efd6] p-5">
            <div class=" flex">
                <div>
                    <img src="images-r/card-example-image.png" class="mt-4 px-2 " />
                </div>
                <div class=" pl-2 pb-2">
                    天空大露天風呂が自慢！箱根湯本の良質な温泉をゆったり堪能しよう。
                    箱根湯本温泉 天成園（てんせいえん）は、大自然に抱かれた「天空大露天風呂」が魅力の温泉旅館です。
                    全長17mの湯船には頭上を遮るものがなく、紅葉や新緑といった箱根の四季折々の風景を楽しめます。
                    寒さ感じはじめる季節、お湯につかった瞬間の心地よさ。瀧の音を感じながらリラックスした時間をお過ごし頂けます。その他、源泉かけ流しの石風呂や内湯の大浴場も好評です。
                    また、テレビ付きリクライニングシートを50台完備したリラックスルームや、お食事処と無料休憩所を兼ねた「憩い処」など、お風呂上りにうれしい施設も充実しています。
                </div>
            </div>
            <div>
                館内ではお食事メニューも豊富。ビール飲み比べでみんなでワイワイするも良し、カップルだとゆったり茶屋で蕎麦をすするのもおすすめです。
                天成園では食事に使用するお水にもこだわり、昔から箱根を旅する人々の喉を潤した玉簾の湧き水を使用。茶屋庭園内にはパワースポットの滝や縁結びの神社もあり、のんびり散策をするのにもうってつけです。ぜひ、箱根湯本駅から散策しつつ、天成園へお越しください！

                #温泉 #露天風呂 #箱根 #箱根湯本 #日帰り温泉 #おしゃれ浴衣 #観光
            </div>

            <div class=" mt-10 text-red-600">
                営業時間、料金、クレジットカードが使える場所・内容など、予告なしに変更される場合があります。
                必ず、ホームページ参照、又は、直接、ご利用施設へお問い合わせお願いします。
            </div>

            <div class=" bg-[#f2e1bc] my-2 p-3">
                <div class=" grid grid-cols-3">
                    <div class=" col-span-1">電話番号： </div>
                    <div class=" col-span-2">0460-83-8511（予約センター） </div>
                </div>
            </div>
            <div class=" bg-[#f2e1bc] my-2 p-3">
                <div class=" grid grid-cols-3">
                    <div class=" col-span-1">営業時間： </div>
                    <div class=" col-span-2">営業時間10：00～翌朝9：00 </div>
                </div>
            </div>

            <div class=" bg-[#f2e1bc] my-2 p-3">
                <div class=" grid grid-cols-3">
                    <div class=" col-span-1">Web：</div>
                    <div class=" col-span-2 text-blue-500">https://www.tenseien.co.jp/</div>
                </div>
            </div>

            <div class=" bg-[#f2e1bc] my-2 p-3">
                <div class=" grid grid-cols-3">
                    <div class=" col-span-1">アクセス：</div>
                    <div class=" col-span-2">
                        車：東京方面より <br>
                        東名高速厚木ＩＣ→小田原厚木道路山崎ＩＣ→国道１号線にて<br>
                        大阪・名古屋方面より<br>
                        東名高速御殿場IC→国道138号→国道１号線にて<br>
                        電車：新宿駅→箱根湯本駅（ロマンスカー）90分→徒歩１２分　　<br>
                        東京駅→小田原駅（新幹線）42分→箱根湯本駅（箱根登山鉄道）15分→徒歩１２分　<br>
                        名古屋駅→小田原駅（新幹線）69分→箱根湯本駅（箱根登山鉄道）15分→徒歩１２分<br>
                    </div>
                </div>
            </div>

            <div class=" bg-[#f2e1bc] my-2 p-3">
                <div class=" grid grid-cols-3">
                    <div class=" col-span-1">平均予算：</div>
                    <div class=" col-span-2 ">4500円（入館+食事）</div>
                </div>
            </div>

            <div class=" bg-[#f2e1bc] my-2 p-3">
                <div class=" grid grid-cols-3">
                    <div class=" col-span-1">クレジットカード：</div>
                    <div class=" col-span-2 ">4500円（入館+食事）</div>
                </div>
            </div>

            <div class=" bg-[#f2e1bc] my-2 p-3">
                <div class=" grid grid-cols-3">
                    <div class=" col-span-1">住所：</div>
                    <div class=" col-span-2 ">神奈川県足柄下郡箱根町湯本682</div>
                </div>
            </div>

            <div class=" bg-[#f2e1bc] my-2 p-3">
                <div class=" grid grid-cols-3">
                    <div class=" col-span-1">駐車場：</div>
                    <div class=" col-span-2 ">5時間まで無料　以降30分ごとに100円</div>
                </div>
            </div>

            <div class="w-full h-[400px] mt-5">
                <iframe class="w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7602540478074!2d139.69932561525876!3d35.68948752526161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c0c1f0e9f7b%3A0x35dff5d3c875ab74!2sShinjuku%2C%20Tokyo%2C%20Japan!5e0!3m2!1sen!2sus!4v1614828591692!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>

        <div class=" flex justify-center mt-10">
            <div class=" custom-container py-5 ">
                <div class=" flex justify-center w-full">
                    <div class=" bg-[#ff5b54] text-white text-2xl p-4 px-10 rounded-3xl shadow-xl 0">
                        クーポンをGET！
                    </div>

                </div>
                <p class=" text-center mt-8 text-[#ff0000]">「クーポンGET!これから行く！」ボタンからクーポン発行画面にてスクリーンショットをお勧めいたします。</p>
            </div>
        </div>

        <div class=" bg-[#eeeeee] flex justify-center">


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
        </div>

    </div>
</div>

<x-footer />
@endsection