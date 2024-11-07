<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>you have new contact email received</h1>
    <p>name : {{ $maildata['name']}}</p>
    <p>email : {{ $maildata['email']}}</p>
    <p>message : {{ $maildata['message']}}</p>
</body>
</html>