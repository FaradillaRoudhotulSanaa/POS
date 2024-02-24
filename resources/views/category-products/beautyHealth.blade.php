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
        <h1>Beauty Health</h1>
        <div class="products">
            <div class="product">
                <h2>Serum Wajah Anti-Penuaan</h2>
                <p>Serum wajah anti-penuaan kami dirancang khusus untuk membantu mengurangi tanda-tanda penuaan pada kulit Anda. 
                    Diperkaya dengan campuran bahan alami seperti vitamin C, retinol, dan kolagen, serum ini membantu mengurangi garis halus, kerutan, dan flek hitam, sambil meningkatkan kelembapan dan kekenyalan kulit. 
                    Dengan pemakaian teratur, kulit Anda akan terasa lebih muda, segar, dan bercahaya.</p>
                <p>Price : Rp 185.000</p>
            </div>
            <div class="product">
                <h2>Suplemen Kesehatan Tulang dan Sendi</h2>
                <p>Suplemen kesehatan tulang dan sendi kami diformulasikan khusus untuk membantu menjaga kekuatan dan kelenturan tulang dan sendi Anda. 
                    Mengandung kombinasi nutrisi penting seperti kalsium, magnesium, dan glucosamine, suplemen ini membantu mengurangi risiko osteoporosis, mengurangi nyeri sendi, dan memperbaiki kerusakan tulang rawan. 
                    Dengan mengonsumsi secara teratur, Anda dapat menjaga kesehatan tulang dan sendi Anda untuk masa depan yang lebih baik.</p>
                <p>Price : Rp 255.000</p>
            </div>
            <div class="product">
                <h2>Masker Rambut Nourishing</h2>
                <p>Masker rambut nourishing kami adalah solusi sempurna untuk merawat dan memperbaiki rambut yang kering dan rusak. 
                    Diperkaya dengan bahan-bahan alami seperti minyak argan, minyak kelapa, dan protein keratin, masker ini memberikan nutrisi mendalam, kelembapan, dan perlindungan bagi setiap helai rambut Anda. 
                    Setelah digunakan, rambut Anda akan terasa lebih lembut, lebih kuat, dan lebih berkilau.</p>
                <p>Price : Rp 143.000</p>
            </div>
        </div>
    </div>
</body>
</html>