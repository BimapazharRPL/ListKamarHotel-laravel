<div class="navbar"><div class="k"><a href="akun">
        <img src="gambar/icon profile.png" alt="icon">
        <p>{{ Auth::user()->name }}</p></a>
        </div>
        <div class="l">
        <a href="dashboard">home</a>
        <a href="/rooms">kamar</a>
        <a href="/reservations">reservasi</a>
        </div>
    </div><br><br><br>
    <div class="judul">
        <h1>HotelReservation</h1>
    </div>
    <style>
      .navbar {
            width: 100%;
            height: 3rem;
            background-color: #d1d1d1;
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 99999;
            font-family: serif;
        }
        .navbar a {
            text-decoration: none;
            margin-left: 25px;
            font-size: 2rem;
            color: #ffff;
            
        }
        .judul {
            height: 80px;
            width: 100%;
            margin-top: 3rem;
            display: flex;
            /* align-items: center; */
            justify-content: center;
            background-color: peru;
            position: fixed;
            font-family: serif;
            z-index: 99999;
        }
        .k a {
          display: flex;
          align-items: center;
          margin-left: 2rem;
          width: 7.5rem;
          justify-content: space-between;
          color: #000;
        }
        .k img {
          height: 2.3rem;
          border-radius: 10rem;
        }
        .l {
          margin-right: 3rem;
        }
        .l a:hover {
          color: #000;
        }
    </style>