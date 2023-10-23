@extends('layouts.master')

@section('content')
    <div class="ab">
   <div class="a">
    <img src="gambar/room.jpg" alt="">
    <h2>Smoking Room</h2>
   </div>
   <div class="b">
    <p> Smoking Room, yaitu sebuah kamar hotel yang diperuntukkan bagi para tamu yang aktif merokok. Berbeda dari kamar lainnya, di sini pengunjung bisa merokok secara bebas di dalam kamar serta diharapkan agar nggak merokok di sembarang tempat.
    Fasilitas yang Biasanya Tersedia
Asbak dalam Kamar: Kamar hotel smoking biasanya dilengkapi dengan asbak atau area yang disediakan khusus untuk merokok.
Ventilasi yang Memadai: Hotel biasanya menyediakan sistem ventilasi yang efektif untuk mengurangi bau asap rokok dalam kamar.
Fasilitas Lainnya: Selain itu, fasilitas standar lainnya seperti tempat tidur yang nyaman, area duduk, dan perlengkapan mandi tetap disediakan dalam kamar hotel smoking.

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