@extends('layouts/main_layout')

@section('content')
<div class="container p-3">
            <h1 class="text-center mb-3 display-3">Личный кабинет</h1>
            <p><span class="fw-semibold">Фамилия:</span> {{$user->firstname}}</p>
            <p><span class="fw-semibold">Имя:</span> {{$user->lastname}}</p>
            <p><span class="fw-semibold">Отчество:</span> {{$user->surname}}</p>
            <p><span class="fw-semibold">Телефон:</span> +7 000 000 00 00</p>
            <div class="cards">
                @foreach($apps as $app)
                    @if($app->status == 1)
                    <div class="card w-100 mb-3 mt-3">
                        <h5 class="card-title">Нарушение № {{$app->id}}</h5>
                        <p class="mb-1"><span class="fw-semibold">Статус:</span> {{$app->getStatus()}}</p>
                        <p class="mb-1"><span class="fw-semibold">Гос номер автомобиля:</span> {{$app->gosRegNumber}}</p>
                        <p class="card-text">{{$app->description}}</p>
                    </div>
                    @endif

                @endforeach
            <a href="{{route('client.new_app')}}" class="btn btn-primary mb-3 mt-3 w-100 shadow-sm  p-3 fs-2 rounded-pill ">Подать заявление</a>
        </div>    
@endsection