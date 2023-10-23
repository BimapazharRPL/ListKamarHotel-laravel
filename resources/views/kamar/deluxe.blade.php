@extends('layouts.master')

@section('content')
    <div class="ab">
   <div class="a">
    <img src="gambar/deluxe.jpg" alt="">
    <h2>Deluxe Room</h2>
   </div>
   <div class="b">
    <p>Pada umumnya Deluxe Room adalah jenis kamar yang memiliki ukuran dan fasilitas lebih oke daripada Superior Room. Meski begitu beberapa hotel justru menyebut kualitas Deluxe Room di bawah Superior Room. Jadi biar nggak salah pilih, pastikan dulu bagaimana kondisi kamar Deluxe Room yang ada di hotel tujuan.

Deluxe Room menyediakan fasilitas yang hampir sama dengan Superior Room. Beberapa hotel bahkan memberikan fasilitas kulkas mini bagi penghuni Deluxe Room. Untuk ukuran kasur, pengunjung bisa memilih antara twin bed atau double bed.
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
        margin-left: 1rem;
        border-radius: 2rem;
        color: #ffff;
        
    }
    .b p {
        padding: 2rem;
    }
   </style>
@endsection