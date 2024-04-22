<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BeritainAjaaa</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }


    .navbar {
        background-color: white; /* Warna background untuk navbar */
        color: white;
        padding: 10px 10px 0 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 5px;
    }

    .navbar .title {
        margin: 0;
        font-size: 24px;
        color: #222;
    }

    .navbar .title {
        color: #222;
        font-weight: 400;
    }

    .navbar .title .red {
        color: crimson;
        font-weight: 800;
    }

    .navbar .button {
        padding: 8px 16px;
        background-color: Crimson; /* Warna tombol Login dan Register */
        color: #fff;
        border: 1px solid white;
        text-decoration: none;
        border-radius: 5px;
    }

    .navbar .button:hover {
        background-color: #222;
        color: #fff;
        border-radius: 5px;
    }

    .navigation {
        background-color: white; /* Warna background untuk navigasi */
        text-align: center;
        padding: 10px; 
        margin-top: 0px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navigation a {
        display: inline-block;
        padding: 8px 16px;
        margin: 0 15px; /* Menambahkan jarak antara tautan */
        color: #222;
        text-decoration: none;
    }

    .navigation a:hover {
        background-color: #222;
        color: #fff;
        border-radius: 5px;
    }

</style>
</head>
<body>

    <div class="navbar">
        <div class="title">
            <span class="red">Beritain</span>Ajaaa
        </div>
        <div>
            <a href="/Login" class="button">Login</a>
            <a href="/Register" class="button">Register</a>
        </div>
    </div>
    
    <div class="navigation">
        <a href="#">Sport</a>
        <a href="#">Politik</a>
        <a href="#">Seleb</a>
        <a href="#">Lainnya</a>
    </div>
    
</body>
</html>