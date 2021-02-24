@extends('adminlte::page')

@section('title','Configurações')

@section('content_header')
    <h1>Configurações</h1>
@endsection

@section('content')
<div class="card card-primary">
    <form action="{{route('settings.save')}}" method="POST">
        @method('PUT')
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Título do Site:</label>
          <input type="text" name="title" value="{{$settings['title']}}" class="form-control @error('name') is-invalid @enderror">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sub-Título do Site:</label>
            <input type="text" name="subtitle" value="{{$settings['subtitle']}}" class="form-control @error('name') is-invalid @enderror">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email para Contato:</label>
            <input type="email" name="email" value="{{$settings['email']}}" class="form-control @error('name') is-invalid @enderror">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cor do Fundo:</label>
            <input type="color" name="bgcolor" value="{{$settings['bgcolor']}}" class="form-control @error('name') is-invalid @enderror" style="width: 90px;">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cor do texto:</label>
            <input type="color" name="textcolor" value="{{$settings['textcolor']}}" class="form-control @error('name') is-invalid @enderror" style="width: 90px;">
        </div>
        <div>
            <input type="submit" value="Salvar" class="btn btn-md btn-success" id="exampleInputPassword1">
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
    @if (session('warning'))
        <div class="alert alert-success alert-dismissible">
            <!--<h4><i class="icon fas fa-ban"></i>Sucesso</h4>-->
            {{session('warning')}}
        </div>
    @endif
</div>

@endsection