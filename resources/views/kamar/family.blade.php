@extends('layouts.master')

@section('content')
    <div class="ab">
   <div class="a">
    <img src="gambar/family.jpg" alt="">
    <h2>Family Room</h2>
   </div>
   <div class="b">
    <p>Dari namanya kamu pasti tahu kalau tipe kamar hotel satu ini hadir secara khusus untuk keluarga atau para tamu yang ingin menginap bersama dua orang lebih. Selain dikenal sebagai Family Room, tipe ini juga dikenal sebagai Triple Room.

Ini karena dalamnya menggunakan single bed berjumlah 3 buah. Akan tetapi ada pula hotel yang menggunakan double bed ukuran king ditambah satu single bed untuk Family Roomnya.Fasilitas yang Sesuai untuk Semua Anggota Keluarga
Fasilitas Khusus Anak-anak: Beberapa kamar hotel family room dilengkapi dengan fasilitas khusus untuk anak-anak, seperti mainan, permainan, atau program hiburan keluarga.
Fasilitas Mandi Tambahan: Beberapa kamar hotel menyediakan lebih dari satu kamar mandi untuk kenyamanan dan kemudahan seluruh keluarga.
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