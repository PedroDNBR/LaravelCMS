@extends('adminlte::page')


@section('title','Novo Usuário')

@section('content_header')
    <h1>Cadastrar Usuários</h1> 
@endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Formulário de cadastro</h3>
    </div>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome Completo:</label>
          <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Senha</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirmar Senha</label>
          <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
        </div>
        <div>
            <input type="submit" value="Cadastrar" class="btn btn-md btn-success" id="exampleInputPassword1">
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