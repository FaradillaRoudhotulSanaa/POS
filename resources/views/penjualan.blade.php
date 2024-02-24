<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
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

        .proove {
            display: grid;
            grid-template-columns: repeat(auto-fit, minimax(100px, 1fr));
            grid-gap: 30px;
        }

        .customer {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .customer h3 {
            margin-top: 0;
            color: green;
        }

        .customer p {
            margin: 20px 0;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Transaksi</h1>
        <div class="proove">
            <div class="customer">
                <h3>Customer 1</h3>
                <p>ID Transaksi     : 0001</p>
                <p>Nama             : Faradilla</p>
                <p>Total Harga      : Rp 365.680</p>
            </div>
            <div class="customer">
                <h3>Customer 2</h3>
                <p>ID Transaksi     : 0002</p>
                <p>Nama             : Haechan</p>
                <p>Total Harga      : Rp 968.750</p>
            </div>
            <div class="customer">
                <h3>Customer 3</h3>
                <p>ID Transaksi     : 0003</p>
                <p>Nama             : Jisung</p>
                <p>Total Harga      : Rp 555.685</p>
            </div>
        </div>
    </div>
</body>
</html>