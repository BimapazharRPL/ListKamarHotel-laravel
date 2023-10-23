<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <img src="gambar/deluxe room.jpg" alt="">
        <div class="signup-form">
            <h2>Hotel Room Prices</h2>
            <h3>Sign UP</h3>
            <form action="/signup" method="post">
        @csrf
                <div class="form-group">
                    
                    <input placeholder="Name" type="text" id="username"  name="name" required >
                </div>
                <div class="form-group">
                    
                    <input placeholder="Your Email" type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                  
                  <input placeholder="Password" type="password" id="password" name="password" required>
              </div>
              <div class="form-group">
                  
                  <input placeholder="Confirm Password" type="password" id="confirm-password" name="password_confirmation" required>
              </div>
              <button type="submit">Sign Up</button>
          </form>
          <p>don't have an account yet ? <a href="login">Log in</a></p>
      </div>
  </div>
</body>
<style>
  body {
    font-family: Arial, sans-serif;
    /* font-size: 2rem; */
    background-color: #f0f0f0;
    background-image: url('/gambar/gambar1.jpg');
    background-size: cover;
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
    height: 89.2vh;
    box-shadow: 5px 2px 4px rgba(0, 0, 0, 0.1);
}

.signup-form {
    background-color: #fff;
    /* border-radius: 8px; */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    width: 28rem;
    /* height: 89.2vh; */
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