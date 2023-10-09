<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Dey</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('include/navbar.php') ?>

    <section class="hero">
        <div class="hero-title">
            <h1>Welcome To <br> IceCreamDey!</h1>
            <p id="desc">Made with Love ♥️♥️♥️</p>
        </div>
        <div class="hero-img" id="hero-img">
            <img src="gambar/3.png" alt="">
        </div>
        <div class="hero-desc">
            <div class="desc-1">
                <h2>100%</h2>
                <p>Dari Susu Murni</p>
            </div><hr>
            <div class="desc-2">
                <h2>100%</h2>
                <p>Halal</p>
            </div>
        </div>
    </section>

    <section class="menu">
        <h2>Our Recommended Flavours</h2><hr>
        <div class="menu-container">
            <div class="list-menu">
                <img src="gambar/choco.webp" alt="">
                <div class="nama-harga">
                    <h3>Chocolate</h3>
                    <p>Rp34.000</p>
                </div>
            </div>
            <div class="list-menu">
                <img src="gambar/coffee.jpg" alt="">
                <div class="nama-harga">
                    <h3>Coffee</h3>
                    <p>Rp34.000</p>
                </div>
            </div>
            <div class="list-menu">
                <img src="gambar/cookies.jpeg" alt="">
                <div class="nama-harga">
                    <h3>Cookies & Cream</h3>
                    <p>Rp34.000</p>
                </div>
            </div>
            <div class="list-menu">
                <img src="gambar/matcha.webp" alt="">
                <div class="nama-harga">
                    <h3>Matcha</h3>
                    <p>Rp34.000</p>
                </div>
            </div>
            <div class="list-menu">
                <img src="gambar/mint_chocolate.jpg" alt="">
                <div class="nama-harga">
                    <h3>Choco Mint</h3>
                    <p>Rp34.000</p>
                </div>
            </div>
            <div class="list-menu">
                <img src="gambar/stoberi.webp" alt="">
                <div class="nama-harga">
                    <h3>Strawberry</h3>
                    <p>Rp34.000</p>
                </div>
            </div>
        </div>
        <a href="./product.html">
            <button onclick="alert('Fitur ini belum tersedia!')" class="shop-now">Lihat Rasa Lainnya</button>
        </a>
    </section>

    <?php include('include/footer.php') ?>
    <script src="./script.js"></script>
</body>
</html>