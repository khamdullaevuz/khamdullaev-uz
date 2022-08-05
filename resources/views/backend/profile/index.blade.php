@extends('adminlte::page')

@section('title', 'Profil')

@section('content_header')
    <h1 class="m-0 text-dark">Profil</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="pb-1">
                        <p class="mb-0"><b>Ism:</b> {{Auth::user()->name}}</p>
                        <p class="mb-0"><b>Email:</b> {{Auth::user()->email}}</p>
                    </div>
                    <a href="{{ route('profile.update') }}">
                        <button
                            class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                            Parolni o'zgartirish
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
