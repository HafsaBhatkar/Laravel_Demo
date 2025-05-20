<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        .footer {
            position: absolute;
            bottom: 0;
            background: skyblue;
            width: 100%;
            margin: 0;
            padding-top, padding-bottom: 10px;
            text-align: center;
        }

        ul li{
            display: inline;
        }

        li a{
            text-decoration: nne;
        }
    </style>
</head>

<body>
    <div class="header">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Login</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </div>
    {{ $main }}
    <div class="footer">
        <p>Footer</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>