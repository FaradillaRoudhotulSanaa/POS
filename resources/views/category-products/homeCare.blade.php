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
        <h1>Homecare</h1>
        <div class="products">
            <div class="product">
                <h2>Set Pembersih Multi-Fungsi</h2>
                <p>Pembersih multi-fungsi kami adalah solusi serbaguna untuk membersihkan dan merawat berbagai permukaan di rumah Anda. 
                    Dirancang untuk membersihkan dapur, kamar mandi, dan area lainnya, formula ini efektif mengangkat noda, kotoran, dan bakteri tanpa meninggalkan residu. 
                    Cocok untuk digunakan di berbagai permukaan seperti keramik, kaca, stainless steel, dan banyak lagi. 
                    Dengan aroma segar dan formula yang ramah lingkungan, pembersih ini akan membuat rumah Anda bersih dan harum.</p>
                <p>Price : Rp 168.000</p>
            </div>
            <div class="product">
                <h2>Pelembut Pakaian</h2>
                <p>Pelembut pakaian kami adalah pilihan yang sempurna untuk menjaga pakaian Anda tetap lembut, harum, dan nyaman dipakai. 
                    Diformulasikan dengan bahan-bahan yang lembut dan aman, pelembut ini tidak hanya membuat pakaian Anda lebih lembut, tetapi juga mengurangi kusut dan memudahkan proses penyetrikaan. 
                    Dengan aroma yang menyegarkan dan tahan lama, pelembut pakaian ini akan memberikan pengalaman mencuci yang menyenangkan setiap kali.</p>
                <p>Price : Rp 63.000</p>
            </div>
            <div class="product">
                <h2>Pembersih Lantai Ramah Lingkungan</h2>
                <p>Pembersih lantai ramah lingkungan kami adalah pilihan yang sempurna untuk membersihkan lantai rumah Anda tanpa meninggalkan residu berbahaya atau zat kimia beracun. 
                    Diformulasikan dengan bahan-bahan alami yang efektif mengangkat kotoran dan noda, pembersih ini cocok untuk digunakan di berbagai jenis lantai seperti keramik, kayu, atau vinyl. 
                    Dengan aroma alami yang menyegarkan, pembersih ini membuat proses membersihkan rumah menjadi lebih menyenangkan.</p>
                <p>Price : Rp 84.500</p>
            </div>
        </div>
    </div>
</body>
</html>