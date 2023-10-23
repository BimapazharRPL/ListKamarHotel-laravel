<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
@include('layouts.separate.navbar')
    <div class="ktk">
        <div class="kot1">
            <img src="gambar/kmr1.jpg" alt="kamar1">
            <h2>Standar Room <br><br> Rp 300.000</h2>
            <a href="standar"><P>Selanjutnya</P></a>
        </div>
        <div class="kot2">
            <img src="gambar/kmr2.jpg" alt="kamar2">
            <h2>Family Room <br><br> Rp 800.000</h2>
            <a href="family"><P>Selanjutnya</P></a>
        </div>
        <div class="kot3">
            <img src="gambar/kmr3.jpg" alt="kamar3">
            <h2>Deluxe Room <br><br> Rp 500.000</h2>
            <a href="deluxe"><P>Selanjutnya</P></a>
        </div>
    </div>
    <style>
        *,
        html {
            top: 0;
            right: 0;
            left: 0;
        }
        body {
            background-color: #d1d1d1;
        }
        
        .ktk {
            height: 200px;
            width:95%;
            display: flex;
            margin-left: 5px;
            margin-top: 15rem;
            align-items: center;
            justify-content: space-between;
        }
        .kot1{
            width: 430px;
            height: 450px;
            background-color: #ffff;
            border-radius: 5px;
            margin-left: 50px;
           
            
        }
        .kot2{
            width: 430px;
            height: 450px;
            background-color: #ffff;
            border-radius: 5px;
            margin-left: 20px;
            
        }
        .kot3{
            width: 430px;
            height: 450px;
            background-color: #ffff;
            border-radius: 5px;
            margin-left: 20px;
           
        }
        .ktk img {
            height: 200px;
            width: 300;
           margin-left: 20px;
           margin-top: 15px;
        }
        .ktk h2 {
            text-align: center;
            font-family: ;
        }
        .ktk a {
            text-decoration: none;
        }
        .ktk p {
            color: black;
            text-align: center;
            background-color: rgb(175, 115, 54);
            border-radius: 50px;
            font-size: 1.5rem;
            width: 150px;
            height: 30px;
            margin-left: 120px;
            margin-top: 50px;
            padding: 5px;
        }
    </style>
</body>
</html>

    