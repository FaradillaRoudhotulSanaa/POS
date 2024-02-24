<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Katalog</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: green;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
        }

        h1 { 
            color: pink;
            text-align: center;
            margin-bottom: 60px;
            font-size: 60px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minimax(100px, 1fr));
            grid-gap: 30px;
        }

        .product {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .product h2 {
            margin-top: 0;
            color: green;
        }

        .product p {
            margin: 20px 0;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Food Beverage</h1>
        <div class="products">
            <div class="product">
                <h2>Coissant</h2>
                <p>Rasakan kenikmatan buttery dan lapisan tipis croissant kami yang disajikan dengan berbagai varian, dari cokelat hingga almond.</p>
                <p>Price : Rp 32.000</p>
            </div>
            <div class="product">
                <h2>Pasta</h2>
                <p>Cita rasa tradisional Italia atau mencari kombinasi rasa yang unik, kami memiliki beragam pilihan untuk memenuhi selera Anda. Dari pasta klasik hingga kreas iinovatif, 
                    setiap hidangan kami dijamin akan memuaskan selera Anda dan meninggalkan kesan yang tak terlupakan.</p>
                <p>Price : Rp 58.000</p>
            </div>
            <div class="product">
                <h2>Coffe</h2>
                <p>Setiap cangkir kopi di sini adalah karya seni yang memukau, mulai dari espresso yang kuat hingga cappuccino yang lembut dan aroma khas dari kopi tubruk.</p>
                <p>Price : Rp 28.000</p>
            </div>
        </div>
    </div>
</body>
</html>