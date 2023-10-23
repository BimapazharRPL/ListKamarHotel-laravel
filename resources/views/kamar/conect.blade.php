@extends('layouts.master')

@section('content')
    <div class="ab">
   <div class="a">
    <img src="gambar/Suite.jpg" alt="">
    <h2>Connecting Room</h2>
   </div>
   <div class="b">
    <p>Connecting Room bisa menjadi pilihan buat kamu yang menginap bersama rombongan, tapi tetap ingin terhubung tanpa menghilangkan privasi. Connecting Room sendiri merupakan dua kamar yang bersebelahan dan terdapat sebuah pintu yang menghubungkan kamar tersebut.

Dengan fasilitas pintu penghubung ini, kamu jadi nggak perlu lagi mengetuk pintu kamar sebelah kalau ingin berkunjung satu sama lain.Fasilitas Keluarga yang Lengkap :
Kenyamanan Keluarga: Fasilitas seperti tempat tidur tambahan, area bermain, atau fasilitas mandi tambahan sering kali disediakan dalam kamar hotel connecting room untuk memastikan kenyamanan seluruh keluarga.
Fasilitas yang Serupa: Meskipun terhubung, setiap kamar umumnya dilengkapi dengan fasilitas yang serupa, sehingga tidak ada perasaan kurang nyaman di antara tamu.
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
        padding: 1rem;
    }
   </style>
@endsection