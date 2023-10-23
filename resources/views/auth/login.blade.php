<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <img src="gambar/deluxe room.jpg" alt="">
        <div class="signup-form">
            <h2>Hotel Room Prices</h2>
            <h3>Login</h3>
            <form action="/login" method="POST">
        @csrf
                <div class="form-group">
                    
                    <input placeholder="Email" type="email" id="email"  name="email" required >
                </div>
            
                <div class="form-group">
                  
                  <input placeholder="Password" type="password" id="password" name="password" required>
              </div>
              <p>or</p><br>
            <div class="log"><a href="">
                <img src="gambar/icon google.png" alt="">
                <p>Lanjut dengan akun google</p></a>
            </div><br>
            <div class="log"><a href="">
                <img src="gambar/iconFB.png" alt="">
                <p>Lanjut dengan akun fecebook</p></a>
            </div><br><br>
              <button type="submit">Login</button>
          </form>
          <p>Already have an account? <a href="register">Sign Up</a></p>
      </div>
  </div>
</body>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    
}
.container img{
    height: 95.7vh;
    box-shadow: 5px 2px 4px rgba(0, 0, 0, 0.1);
}

.signup-form {
    background-color: #fff;
    /* border-radius: 8px; */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    width: 28rem;
}

h2 { 
    margin-bottom: 35px;
}
h3 {
    margin-bottom: 35px;
    margin-right: 22rem;
}

.form-group {
    margin-bottom: 25px;
    border-bottom: 1px solid black
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 90%;
    padding: 10px;
    
    border: none;
    outline: none;
    font-size: 16px;
}
.log {
    height: 2rem;
    box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2);
    width: 80%;
    text-decoration: none;
    background-color: white;
    margin-left: 2.5rem;
    border-radius: 3rem;
    display: flex;
    align-items:center;
    justify-content: center;
    
}
.log img {
    height: 1.2rem;
    border-radius: 80rem:
    
}
.log a {
    display: flex;
    align-items:center;
    justify-content: center;
    text-decoration: none; 
    font-size: 0.8rem;

}


button {
    background-color: peru;
    border: none;
    border-radius: 4rem;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    margin-top: 3rem;
    padding: 10px 10rem;
    transition: background-color 0.3s;
}

p {
    margin-top: 20px;
}

a {
    text-decoration: none;
    color: #007bff;
}

a:hover {
    text-decoration: underline;
}
</style>
</html>