<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="bac">
    <img id="randomImage" src="" alt="Random Image">
    <h3>No Kamar : {{ $rooms[0]->no_kamar }}</h3>
    <h3>Type Kamar : {{ $rooms[0]->type_kamar }}</h3>
    <h3>Harga : {{ $rooms[0]->harga }} Ribu Rupiah</h3>
    <h3>Fasilitas : {{ $rooms[0]->fasilitas }}</h3>
</div>
<style>
    body {
        background-color: #d1d1d1;
    }
    .bac {
        margin: 1rem auto;
        width: 45rem;
        height: 36rem;
        padding: 1rem;
        background-color: #ffff;
        border-radius: 15px;
        box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2);
        text-align: center;
    }
    .bac img {
        border-radius: 12px;
        width: 45rem;
        height: 26rem;
    }
</style>
<script>
        // Daftar URL gambar
        var images = [
            'gambar/family.jpg',
            'gambar/deluxe.jpg',
            'gambar/kmr1.jpg',
            'gambar/junior.jpg',
            'gambar/romsmok.jpg',
            'gambar/kmr3.jpg',
            'gambar/Suite-Room.jpg',
            'gambar/suite.jpg',
            'gambar/room.jpg',
            'gambar/twin.jpg',
            // Tambahkan URL gambar tambahan di sini
        ];

        // Fungsi untuk memilih URL gambar secara acak
        function getRandomImage() {
            var randomIndex = Math.floor(Math.random() * images.length);
            return images[randomIndex];
        }

        // Memperbarui atribut src dari elemen gambar dengan gambar acak saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            var randomImgElement = document.getElementById('randomImage');
            var randomImageLocation = getRandomImage();
            randomImgElement.src = "{{ asset('') }}" + randomImageLocation;
            randomImgElement.alt = "Random Image " + randomImageLocation;
        });
    </script>
</body>
</html>
