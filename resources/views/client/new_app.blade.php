@extends('layouts/main_layout')

@section('content')
    <div class="container p-3">
            <h1 class="text-center mb-3 display-3">Подача заявления</h1>
            @if ($errors->any())
                <div class="bg-danger rounded-pill text-white fs-5 p-3">
                    @foreach($errors->all() as $errors)
                    {{$errors}}
                    <br>
                    @endforeach
                </div>
            @endif
            <form action="{{route('client.store')}}" method="post" class="m-auto">
            @csrf
                <div class="mb-3">
                    <label for="gosRegNumber" class="form-label fs-5">Государственный регистрационный номер автомобиля</label>
                    <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="gosRegNumber" name="gosRegNumber">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fs-5">Описание нарушения</label>
                    <textarea class="form-control shadow-sm  p-3 rounded-5" id="description" rows="5" name="description"></textarea>
                </div>
                <input type="submit" class="btn btn-primary mb-3 mt-3 w-100 shadow-sm  p-3 fs-2 rounded-pill" value="Подать заявление">
            </form>
        </div>
@endsection