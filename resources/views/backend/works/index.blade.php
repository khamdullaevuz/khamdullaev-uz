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
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('works.create') }}">
                            <button class="btn btn-success" type="button">Ma'lumot qo'shish</button>
                        </a>
                    </div>
                    <div class="mt-4"></div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>T/r</th>
                            <th>Nomi:</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($works as $work)
                            <tr>
                                <td>{{ (($works->currentpage()-1) * $works->perpage() + ($loop->index+1)) }}</td>
                                <td>{{ $work->name }}</td>

                                <td>
                                    <form action="{{ route('works.destroy', ['work'=>$work->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('works.show', ['work'=>$work->id]) }}"
                                           class="btn btn-primary btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('works.edit', ['work'=>$work->id]) }}"
                                           class="btn btn-success btn-sm">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td></td>
                                <td>Hech narsa topilmadi</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="mt-1">
                        {{ $works->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
