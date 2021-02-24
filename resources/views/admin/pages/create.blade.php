@extends('adminlte::page')


@section('title','Nova Página')

@section('content_header')
    <h1>Enviar Páginas</h1> 
@endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Formulário de envio</h3>
    </div>
    <form action="{{route('pages.store')}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Título:</label>
          <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Conteúdo</label>
            <textarea name="body" class="form-control" cols="30" rows="10">{{old('body')}}</textarea>
          </div>
        <div>
            <input type="submit" value="Enviar" class="btn btn-md btn-success" id="exampleInputPassword1">
        </div>
      </div>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <h4><i class="icon fas fa-ban"></i>ERRO</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection