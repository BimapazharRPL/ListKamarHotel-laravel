@extends('layouts.master')

@section('content')
    <div class="ab">
   <div class="a">
    <img src="gambar/kmr3.jpg" alt="">
    <h2>Suite Room</h2>
   </div>
   <div class="b">
    <p>Suite Room adalah tipe kamar di atas Junior Suite Room. Ukuran satu kamar Suite Room bisa mencapai luas 80 meter persegi dengan fasilitas yang nggak kalah mewah dari Junior Suite Room. Kamu bahkan bisa menemukan mini pantry atau dapur pribadi layaknya kamar apartemen.

Melihat fasilitas yang ada, maka nggak heran kalau tarif menginap di Suite Room lebih mahal. Ibarat pepatah “Ada harga, Ada rupa”.Fasilitas yang Mewah dan Eksklusif :
Kamar Mandi Mewah: Suite room biasanya dilengkapi dengan kamar mandi pribadi yang luas, terkadang dengan bathtub dan fasilitas mandi mewah lainnya.
Layanan Pribadi: Tamu suite room sering kali dapat menikmati layanan pribadi, termasuk layanan concierge 24 jam, layanan kamar, dan layanan valet.
    </p>
   </div>
   </div>
   <style>
    .ab {
        display: flex;
        position: fixed;
        margin: 8.4rem 14rem;
        
    }
    .a img {
        height: 28rem;
    }
    .a h2 {
        text-align: center;
        padding: 0.3rem;
        background-color: peru;
        margin-top: 0.5px;
    }
    .b{
        background-color: peru;
        height: 30rem;
        width: 20rem;
        margin-left: 0.6rem;
        border-radius: 2rem;
        color: #ffff;
    }
    .b p {
        padding: 1rem;
    }
   </style>
@endsection