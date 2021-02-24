@extends('adminlte::page')

@section('title','Meu Perfil')

@section('content_header')
    <h1>Meu Perfil</h1>
@endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Formulário de edição</h3>
    </div>
    <form action="{{route('profile.save')}}" method="POST">
        @method('PUT')
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome Completo:</label>
          <input type="text" name="name" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nova Senha</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirmar Senha</label>
          <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
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