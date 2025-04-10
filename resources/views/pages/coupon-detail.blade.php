@extends('layouts.app')

@section('content')
<x-header />
<x-nav-bar />

<div class=" background-coupon-home  justify-center flex">
    <div class=" custom-container pt-5">
        <div class=" bg-[#f1f1f1] p-3">
            <div class=" border border-[#DDD] p-2 ">
                <p class=" text-[#f00] text-xs text-center px-82">下記クーポンの記載をご確認後、ご活用ください。
                    利用施設により、印刷が【必要】です。</p>
            </div>
        </div>
        <div class="flex my-10 bg-[#ebe9e4] shadow p-1 text-sm">
            <span class=" text-[#1959b1]">ホーム > 関東 > 神奈川県 > 箱根 > </span>【1,030円引き】屋上天空大露天風呂の天然温泉 天成園 入館＋館内利用券 2,000円付き
        </div>
    </div>
</div>

<div class=" bg-[#eeeeee] flex justify-center">
    <div class=" custom-container py-5 ">
        <div class=" flex justify-center w-full">
            <div class=" bg-[#ff5b54] text-white text-xl p-4 rounded-3xl shadow-xl">
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

<x-footer />
@endsection