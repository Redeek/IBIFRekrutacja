<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Login</title>
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
        <h3> Login </h3>
        <form action="/login" method="POST">
            @csrf
            <label for="email" class="form-label"> Enter your email</label>
            <input name="email" type="email" placeholder="email" class="form-control">
            <label for="password" class="form-label">Enter your password</label>
            <input name="password" type="password" placeholder="password" class="form-control">
            <div class="mt-3">
                <button class="btn btn-primary"> Login </button>
            </div>
            
        </form>
    </div>
    
</body>
</html>
