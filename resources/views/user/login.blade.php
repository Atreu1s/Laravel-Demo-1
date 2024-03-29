@extends('layouts/main_layout')

@section('content')
<div class="container p-3">
                <h1 class="text-center mb-3 display-3">Вход</h1>
                <form action="{{route('auth')}}" method="post" class="m-auto">
                @csrf
                    <div class="mb-3">
                    @if ($errors->any())
                        <div class="bd-danger rouded-pill p-3">
                            @foreach($errors->all() as $error)
                            {{$error}}
                            <br>
                            @endforeach
                        </div>
                    @endif
                        <label for="login" class="form-label fs-5">Ваш логин</label>
                        <input type="text" class="form-control shadow-sm p-3 rounded-pill" id="login" name="login">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fs-5">Ваш пароль</label>
                        <input type="password" class="form-control shadow-sm  p-3 rounded-pill" id="password" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary mb-3 mt-3 w-100 shadow-sm  p-3 fs-4 rounded-pill" value="Войти">
                    <a href="/register/" class="btn btn-outline-primary w-100 p-3 fs-4 rounded-pill shadow-sm">Зарегистрироваться</a>
                </form>
            </div>
    
    
    <footer class="sticky-bottom text-center text-secondary p-3">
        <div class="container-fluid">
            <span>Нарушениям.Нет <br>2024</span>
        </div>        
    </footer>    
    <script src="js/bootstrap.js"></script>
@endsection