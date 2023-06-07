<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Welcome</h1>
    <div class="container">
        <form action="user.php" method="$_GET">
            <input type="message" name="paragraph" placeholder="Please insert badwords in italian then press enter">
        </form>
    </div>
    <style>
        body{
            font-family: sans-serif;
        }
        h1{
            text-align: center;
            background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        input{
            width: 292px;
            height: 100px;
        }
        .container{
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }
    </style>
</body>
</html>