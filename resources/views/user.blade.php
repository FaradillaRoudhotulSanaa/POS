<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: green;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin-top: 50px;
            margin: 0 auto;
            padding: 100px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: pink;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 40px;
            font-size: 60px;
        }

        .user-info {
            margin-top: 0;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Profile</h1>
        <div class="user-info">
            <p>ID User  : {{$id}}</p>
            <p>Name     : {{$name}}</p>
        </div>
    </div>
</body>
</html>