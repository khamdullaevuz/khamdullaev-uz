@extends('adminlte::page')

@section('title', 'Ish yaratish')

@section('content_header')
    <h1 class="m-0 text-dark">Ish yaratish</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('works.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('backend.works.form')
                        <button class="mt-1 btn btn-primary" type="submit">Yaratish</button>
                        <a href="{{ route('works.index') }}">
                            <button type="button" class="mt-1 btn btn-danger">Bekor qilish</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
