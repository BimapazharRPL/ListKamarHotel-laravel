@extends('layouts.master')

@section('content')
    <div class="ab">
   <div class="a">
    <img src="gambar/romsmok.jpg" alt="">
    <h2>Twin Room</h2>
   </div>
   <div class="b">
    <p>Twin Room bisa menjadi pilihan terbaik buat kamu yang ingin mendapatkan kasur terpisah. Adapun ukuran kasur yang biasa dipakai untuk Twin Room adalah single bed. Meski peletakan kasurnya dibuat berjarak, nggak jarang pengunjung menggeser kasurnya agar saling berhimpitan seperti double bed.

Tipe kamar ini sangat cocok untuk kamu yang lagi liburan bersama saudara/teman yang berjumlah dua orang. Mengenai fasilitas, masing-masing hotel memberikan layanan yang berbeda. Yang jelas kamar ini bakal memberikan fasilitas menginap standar seperti TV, AC, perlengkapan toilet, dan air minum gratis.
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
        padding: 2rem;
    }
   </style>
@endsection