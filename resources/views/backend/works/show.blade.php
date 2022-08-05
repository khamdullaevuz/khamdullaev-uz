@extends('adminlte::page')

@section('title', 'Ishlar')

@section('content_header')
    <h1 class="m-0 text-dark">Ishlar</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p><b>Nomi: </b>{{$work->name}}</p>
                    <p><b>Ma'lumot: </b>{{$work->description}}</p>
                    <p>
                        <b>Rasmi:</b><br/>
                        <img class="mt-1" src="/uploads/{{$work->photo}}" alt="{{$work->name}}" width="50%"
                             height="50%">
                    <p>
                        <a href="{{ route('works.edit', ['work'=>$work->id]) }}">
                            <button type="button" class="mt-1 btn btn-success">Tahrirlash</button>
                        </a>
                        <a href="{{ route('works.index') }}">
                            <button type="button" class="mt-1 btn btn-primary">Ortga</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
@stop
