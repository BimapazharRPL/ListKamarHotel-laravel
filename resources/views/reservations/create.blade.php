<form method="POST" action="{{ route('reservations.store') }}">
    @csrf
    <div>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div>
        <label for="checkin_date">Tanggal Check-in:</label>
        <input type="date" id="checkin_date" name="checkin_date" required>
    </div>
    <div>
        <label for="checkout_date">Tanggal Check-out:</label>
        <input type="date" id="checkout_date" name="checkout_date" required>
    </div>
    <div>
        <label for="no_kamar">Nomor Kamar:</label>
        <input type="number" id="no_kamar" name="no_kamar" required>
    </div>
    <div>
    <label for="type">Type Kamar:</label>
        <select name="type_kamar" id="type">
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
        <label for="jumlah_tamu">Jumlah Tamu:</label>
        <input type="number" id="jumlah_tamu" name="jumlah_tamu" required>
    </div>
    <div>
        <label for="total">Total Harga:</label>
        <input type="number" step="0.01" id="total" name="total" required>
    </div>
    <button type="submit">Submit</button>
</form>

<style>
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 16px;
        border: 2px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2);
    }

    div {
        margin-bottom: 13px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"] {
        width: calc(100% - 20px);
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    select {
        width: 95%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
    }

    button[type="submit"] {
        background-color: peru;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    button[type="submit"]:hover {
        background-color: rgb(150, 96, 42);
    }
</style>

