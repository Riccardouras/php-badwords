<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thx for saying badwords</title>
</head>
<body>
   <pre>
        <?php 
            $text = $_GET["paragraph"];
            $censoredWords = array('caz', 'cul', 'tett', 'porco', 'bastard', 'fig');
            $forbittenWords = str_replace($censoredWords, '***', $text);
        ?>
    </pre>
    <h1><?php var_dump($forbittenWords); ?></h1>
</body>
<style>
    body{
        padding: 400px;
        font-family: sans-serif;
}
h1{
    text-align: center;
    background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
</style>
</html>