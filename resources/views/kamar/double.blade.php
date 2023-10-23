@extends('layouts.master')

@section('content')
    <div class="ab">
   <div class="a">
    <img src="gambar/junior.jpg" alt="">
    <h2>Double Room</h2>
   </div>
   <div class="b">
    <p>Double Room adalah tipe kamar hotel yang menyediakan satu ranjang berjenis double alias dapat dipakai oleh dua orang sekaligus. Jenis kasur ini sangat cocok bagi para pasangan yang ingin menginap bersama atau staycation.

Double Room sendiri dibedakan lagi menjadi dua variasi, ada Queen Double Room dan King Double Room. Seperti yang bisa kamu tebak, perbedaan keduanya terletak pada ukuran kasur yang dipakai.

Queen Double Room menggunakan kasur ukuran 200 cm x 160 cm atau dikenal dengan kasur nomor 2, sedangkan King Double Room memakai kasur nomor 1 atau ukuran 200 cm x 180 cm.
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
        margin-left: 0.2rem;
        border-radius: 2rem;
        color: #ffff;
    }
    .b p {
        padding: 2rem;
    }
   </style>
@endsection