<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/css/home.css">
    <style>
        body{
            padding: 0 20px 0 20px;
        }
        header{
             display: flex;
             justify-content: space-between;
             align-items: center;
             
        }
        header ul{
            display: flex;
            gap: 20px;
            list-style-type: none;
        }
        .card{
           width: 100px;
           height: 120px; 
           background-color: rgb(145, 221, 145);
        }
        img{
            width: 100px;
        }
    </style>
</head>
<body>
    <header>
        <div class="title"> Feature Categories</div>
        <div class="menu">
            <ul>
                <li>All</li>
                <li>Milks & Dairies</li>
                <li>Coffee & tea</li>
                <li>Pet food</li>
                <li>Meats</li>
                <li>Vegetables</li>
                <li>Fruits1</li>
            </ul>
        </div>
    </header>
    <section class="section1">
        <div class="card">
            <img src="{{ asset('images/pexels-horizon-content-3738730.jpg') }}" alt="">
        </div>
    </section>
</body>
</html>