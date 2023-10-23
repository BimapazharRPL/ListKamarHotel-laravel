@extends('layouts.master')

@section('content')
    <div class="ab">
   <div class="a">
    <img src="gambar/Suite-Room.jpg" alt="">
    <h2>Standard Room</h2>
   </div>
   <div class="b">
    <p>Seperti namanya, Standard Room merupakan kelas kamar terbawah dan hanya memiliki fasilitas yang terbatas, seperti tempat tidur, AC, TV, perlengkapan mandi, dan air minum.

Untuk ukuran kasur yang disediakan oleh Standard Room biasanya bervariasi. Ada yang memberikan kasur model single bed, queen size, atau bahkan king size. Yang jelas kualitas Standard Room di hotel bintang 1 dengan hotel bintang 5 pasti sangat berbeda.

Soal harga nggak perlu ditanya. Kamar ini umumnya dibanderol murah sehingga sangat cocok buat kamu yang liburan dengan dana terbatas.

Sayangnya tidak semua hotel memiliki Standard Room.
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
        margin-left: 2.6rem;
        border-radius: 2rem;
        color: #ffff;
    }
    .b p {
        padding: 2rem;
    }
   </style>
@endsection