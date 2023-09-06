<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>IBIF</title>
</head>
<body>
    <header>
        <div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">{{__('messages.home')}}</a>
                </li>
                @auth
                    @if (auth()->user()->usertype == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/dashboard">{{__('messages.dashboard')}}</a>
                        </li>
                    @else
                        <a class="nav-link" href="/dashboard">{{__('messages.dashboard')}}</a>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/wysiwyg">WYSIWYG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">{{__('messages.contact')}}</a>
                    </li>
                 <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button href="/logout">{{__('messages.logout')}} </button>
                    </form>
                 </li> 

                    @if (auth()->user()->usertype == 'user')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{__('messages.chooseLanguage')}}</a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="{{ route('setlocale', 'en') }}">English</a> </li>
                            <li> <a class="dropdown-item" href="{{ route('setlocale', 'pl') }}">Polski</a> </li>
                        </ul>
                        </a>
                    </li>
                    
                    @endif

                 @else
                 <li class="nav-item">
                    <a href="/register" class="nav-link" > Register </a>
                </li>
                <li class="nav-item">
                    <a href="/login" class="nav-link" > Login </a>
                </li>   
                
                
                @endauth
            </ul>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; 2023 Zadanie rekrutacyjne
    </footer>
    
</body>
</html>