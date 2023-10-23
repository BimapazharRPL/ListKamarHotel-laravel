<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account</title>
</head>
<body>
    <div class="profil">
        <div class="foto"><br><br>
        <img src="gambar/icon profile.png" alt=""><br><br>
        </div>
        <div class="iden">
            <h3>Nama Pengguna :</h3>
            <p>{{ Auth::user()->name }}</p>
            <h3>Email Address :</h3>
            <p>{{ Auth::user()->email }}</p>
            <h3>Nomor Telepon :</h3>
            <p>Kosong</p>
            <h3>Alamat  :</h3>
            <p>karawang</p>
        </div>
    </div>
    <div class="pilih">
        <p><a href="dashboard">Kembali</a></p>
        
        <form action="/logout" method="POST">
            <button type="submit"><a>Logout</a></button>
          </form>
        <p><a href="edit">Edit</a></p>
    </div>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            /* background-attachment: fixed; */
            transition: background 1s ease;
        }
        .profil {
            display: flex;
            background-color: none;
            width: 35rem;
            /* max-width: 150rem; */
            margin: 100px auto;
            margin-left: 22rem;
            position: fixed;
            padding: 30px;
            box-shadow: 1px 5px 50px 3px rgba(0, 0, 0, 0.39);
            border-radius: 10px;
            /* text-align: center; */
        }
        .profil:hover {
            background-color: rgb(185, 185, 185);
        }
        .foto img {
            border-radius: 50%;
        }
        .iden {
            margin-left: 2.5rem;
        }
        .iden p{
            border-bottom: solid 1px black;
            background-color: aliceblue;
        }
        .pilih {
            width: 35rem;
            height: 3rem;
            display: flex;
            justify-content: space-around;
            position: fixed;
            margin: 33rem auto;
            margin-left: 24rem;
        }
        .pilih a {
            text-decoration: none;
            color: black;
            background-color: white;
            border-radius: 25px;
            border: solid 1px black;
            padding: 0.8rem;
        }
        .pilih a:hover {
            text-decoration: none;
            color: #ffff;
            background-color: rgb(0, 0, 0);
            border-radius: 25px;
            font-weight: 900;
            border: solid 1px rgb(255, 255, 255);
            padding: 0.8rem;
        }
         button {
            color: black;
            background-color: none;
            border-radius: 25px;
            border: none;
            background-color: transparent;
            /* padding: 0.8rem; */
            cursor: pointer;
            margin-top: 1rem;
        }
        button a {
            background: none;
            background-color: transparent;
        }
    </style>
    <script>
        function setBackgroundByTime() {
            const currentTime = new Date().getHours();

            // Atur gambar latar belakang sesuai dengan waktu
            if (currentTime >= 5 && currentTime < 10) {
                document.body.style.backgroundImage = "url('gmbr/bgpagi.jpg')";
            } else if (currentTime >= 10 && currentTime < 15) {
                document.body.style.backgroundImage = "url('gmbr/bgsiang.jpg')";
            } else if (currentTime >= 15 && currentTime < 18) {
                document.body.style.backgroundImage = "url('gmbr/bgsore.jpg')";
            } else {
                document.body.style.backgroundImage = "url('gmbr/bgmalam.jpg')";
            }
        }

        setBackgroundByTime();
    </script>
</body>
</html>