@extends('layouts.master')

@section('content')
    <div class="ab">
   <div class="a">
    <img src="gambar/kmr1.jpg" alt="">
    <h2>Single Room</h2>
   </div>
   <div class="b">
    <p>Bisa dibilang kalau Single Room hampir sama dengan Standard Room., karena keduanya memiliki harga sewa yang murah sehingga sangat cocok untuk para budget traveler.

Selain itu, ada juga yang menyebut Single Room sebagai Studio Room, yaitu tipe kamar yang terdiri atas satu tempat tidur dan beberapa jenis perlengkapan yang mampu menambah fungsionalitas ruangan seperti meja dan kursi untuk berhias.
Aksesibilitas yang Mudah: Karena biasanya berlokasi di area-area yang strategis di dalam hotel, akses ke fasilitas umum seperti restoran, area bersantai, dan fasilitas kebugaran dapat lebih mudah dijangkau dari kamar hotel single room.
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