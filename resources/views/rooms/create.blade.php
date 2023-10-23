<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="container">
    <form method="POST" action="{{ route('rooms.store') }}">
    @csrf
    <div>
        <label for="no">No Kamar:</label>
        <input type="number" id="no" name="no_kamar" placeholder="Masukkan No Kamar">
        </div>
    <div>
        <label for="room-type">Type Kamar:</label>
        <select id="room-type" name="type_kamar">
        <option value="Deluxe Room">Deluxe Room</option>   
        <option value="Standard">Standard</option>
        <option value="Superior">Superior</option>
        <option value="Twin Room">Twin Room</option>
        <option value="Single Room">Single Room</option>
        <option value="Double Room">Double Room</option>
        <option value="Family Room">Family Room</option>
        <option value="Suite Room">Suite Room</option>
        <option value="Smoking">Smoking</option>
        <option value="Connecting">Connecting</option>
        </select>
        </div>
        <div>
        <label for="harga">Harga per Malam:</label>
        <input type="number" id="harga" name="harga" placeholder="Masukkan harga">
        </div>
        <div>
        <label for="fasilitas">fasilitas:</label>
        <input type="text" id="fasilitas" name="fasilitas" placeholder="Masukkan fasilitas yang anda inginkan">
        </div>

        <button type="submit">Tambahkan Kamar</button>
    </form>
</div>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        width: 50%;
        margin: 5rem auto;
    }
    div {
        margin-bottom: 13px;
    }

    form {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2);
    }

    input[type="text"], input[type="number"] {
        width: 95%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    select {
        width: 98%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
</html>
