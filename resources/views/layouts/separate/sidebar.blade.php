<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="deluxe">Deluxe Room</a></li>
            <li><a href="standar">Standard</a></li>
            <li><a href="superior">Superior</a></li>
            <li><a href="twin">Twin Room</a></li>
            <li><a href="single">Single Room</a></li>
            <li><a href="double">Double Room</a></li>
            <li><a href="family">Family Room</a></li>
            <li><a href="suite">Suite Room</a></li>
            <li><a href="smoking">Smoking</a></li>
            <li><a href="conect">Connecting</a></li>
        </ul>
    </div>
    
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    text-align: center;
    }

    .sidebar {
        margin-top: 8rem;
        width: 13rem;
        height: 100vh;
        background-color: black;
        position: fixed;
        font-family: cursive;
        /* font-size: 1.5rem; */
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        padding: 0.8rem;
        
    }

    .sidebar ul li a:hover {
        background-color: #ffff;
        color: #000;
        padding: 1rem 2rem;
        border-radius: 1rem;
        font-family: serif;

    }

    .sidebar ul li a {
        text-decoration: none;
        color: #ffff;
        cursor: pointer;
        padding: 1rem 2.3rem;
    }


    </style>
</body>
</html>
