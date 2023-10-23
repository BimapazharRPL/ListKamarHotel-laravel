@extends('layouts.master')

@section('content')
    <div class="ab">
   <div class="a">
    <img src="gambar/twin.jpg" alt="">
    <h2>Superior Room</h2>
   </div>
   <div class="b">
    <p>Kalau kamu ingin mendapatkan tipe kamar hotel yang lebih nyaman dari Standard Room, coba cari hotel yang menyediakan Superior Room.

Superior Room menawarkan ukuran ruangan yang lebih luas dari Standard Room. Jika posisi Standard Room rata-rata berada di lantai paling bawah hotel, Superior Room berlokasi di lantai yang lebih atas.

Urusan fasilitas, layanan dan perlengkapan menginap Superior Room hampir sama dengan Standard Room. Hanya saja pada tipe ini pengunjung akan diberikan opsi: apakah memilih kasur ukuran twin bed atau double bed?

Twin bed merupakan 2 kasur ukuran single bed, sedangkan double bed adalah 1 kasur berukuran queen size atau king size.
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