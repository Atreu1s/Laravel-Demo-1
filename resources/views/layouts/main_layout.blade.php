<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body style="background-color: #e3f2fd;">
   
    <header class="border-bottom border-secondary p-3">       
        <nav class="navbar navbar-light navbar-expand-md" style="background-color: #e3f2fd;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('main')}}">
                        <img src="car-front-fill.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Нарушениям.Нет
                    </a>            
                    <button class="navbar-toggler" data-bs-toggle="collapse" 
                        data-bs-target="#navbarNav" >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="navbar-nav">
                        @guest
                        <a class="nav-link" href="{{route('login')}}">Вход</a>
                        <a class="nav-link" href="{{route('reg')}}">Регистрация</a>
                        @endguest
                        @auth
                        <a class="nav-link" href="{{route('client.index')}}">Личный кабинет</a>                  
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <input type="submit" class="nav-link" value="Выход">
                        </form>
                        @endauth
                        </div>
                    </div>        
                </div>
        </nav>      
    </header>
    
        
    <main class="container">
        @yield('content')
    </main>
    <script src="js/bootstrap.js"></script>
</body>
</html>