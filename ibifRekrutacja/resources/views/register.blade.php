<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body>
    <div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link" > Register </a>
            </li>
            <li class="nav-item">
            <a href="/login" class="nav-link" > Login </a>
            </li>
        </ul>
    </div>
    <div class="mb-3 w-50 m-5">
        <h3> Register </h3>
        <form action="/register" method="POST">
            @csrf
            <label for="name" class="form-label">Set your name</label>
            <input id=name name="name" type="text" placeholder="name" class="form-control">
            <label for="email" class="form-label"> Set your email</label>
            <input name="email" type="email" placeholder="email" class="form-control">
            <label for="password" class="form-label">Set your password</label>
            <input name="password" type="password" placeholder="password" class="form-control">
            <div class="mt-3">
                <button class="btn btn-primary"> Register </button>
            </div>
            
        </form>
    </div>
    
</body>
</html>