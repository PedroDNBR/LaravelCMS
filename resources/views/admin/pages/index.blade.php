@extends('adminlte::page')


@section('title','páginas')

@section('content_header')
    <h1>Minhas Páginas <a href="{{route('pages.create')}}" class="btn btn-sm btn-success">Nova Página</a></h1> 
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <table class='table table-bordered table-hover'>
            <thead>
                <tr>
                    <th style="width: 50px">ID</th>
                    <th>Título</th>
                    <th style="width: 183px;">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{$page->id}}</td>
                    <td>{{$page->title}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" target="_blank">Ver</a>
                        <a href="{{route('pages.edit', ['page' => $page->id])}}" class="btn btn-sm btn-info">Editar</a>
                        <form class="d-inline" action="{{route('pages.destroy', ['page' => $page->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button onclick="return confirm('Deseja mesmo excluir?');" class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
{{$pages->links()}}

    



@endsection