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
        <h1>Baby Kid</h1>
        <div class="products">
            <div class="product">
                <h2>Kereta Dorong Bayi 3 in 1 </h2>
                <p>Kereta dorong bayi 3-in-1 kami adalah solusi serbaguna untuk orangtua yang aktif. 
                    Didesain dengan keamanan dan kenyamanan sebagai prioritas utama, kereta ini dapat berfungsi sebagai kereta dorong, kursi mobil bayi, dan kursi makan portabel. 
                    Fleksibel dan mudah disesuaikan, produk ini adalah pilihan yang sempurna untuk perjalanan dan petualangan bersama bayi Anda.</p>
                <p>Price : Rp 2.500.000</p>
            </div>
            <div class="product">
                <h2>Set Mainan Edukatif Interaktif</h2>
                <p>Mainan edukatif interaktif kami adalah alat yang sempurna untuk merangsang perkembangan kognitif dan motorik anak-anak Anda. 
                    Dirancang dengan warna-warni ceria dan berbagai bentuk yang menarik, mainan ini tidak hanya menghibur, tetapi juga membantu anak Anda belajar tentang bentuk, warna, dan suara. 
                    Bahan berkualitas tinggi dan aman untuk digunakan, mainan ini adalah pilihan yang tepat untuk memperkaya waktu bermain anak-anak Anda.</p>
                <p>Price : Rp 450.000</p>
            </div>
            <div class="product">
                <h2>Pakaian Renang Anak UV Protection</h2>
                <p> Pakaian renang anak-anak dengan perlindungan UV kami adalah solusi sempurna untuk liburan keluarga di pantai atau kolam renang. 
                    Didesain dengan teknologi perlindungan UV yang canggih, pakaian renang ini membantu melindungi kulit sensitif anak Anda dari paparan sinar matahari berbahaya. 
                    Terbuat dari bahan berkualitas tinggi yang cepat kering dan nyaman dipakai, pakaian renang ini juga memiliki desain yang menarik dengan berbagai motif dan warna cerah.</p>
                <p>Price : Rp 235.000</p>
            </div>
        </div>
    </div>
</body>
</html>