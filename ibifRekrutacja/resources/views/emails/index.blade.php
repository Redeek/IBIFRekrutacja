<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email send</title>
</head>
<body>
    <h1> Wysłany email </h1>

    <p> {{ $data['message'] }}</p>
    

    <h4>Wysłane przez: {{ $data['email'] }}</h4>
</body>
</html>