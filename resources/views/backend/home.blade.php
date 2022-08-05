@extends('adminlte::page')

@section('title', 'Boshqaruv Paneli')

@section('content_header')
    <h1 class="m-0 text-dark">Boshqaruv Paneli</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Siz tizimga kirgansiz!</p>
                </div>
            </div>

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$count}}</h3>
                    <p>Ishlar</p>
                </div>
                <div class="icon">
                    <i class="fa fa-list"></i>
                </div>
                <a href="{{route('works.index')}}" class="small-box-footer">
                    Ko'rish <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
@stop
