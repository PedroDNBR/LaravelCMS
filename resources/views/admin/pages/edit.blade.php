@extends('adminlte::page')


@section('title','Editar Página')

@section('content_header')
    <h1>Editar Página</h1> 
@endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Formulário de edição</h3>
    </div>
    <form action="{{route('pages.update', ['page'=>$page->id])}}" method="POST">
        @method('PUT')
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Título:</label>
          <input type="text" name="title" value="{{$page->title}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Conteúdo</label>
            <textarea name="body" class="form-control bodyfield @error('body') is-invalid @enderror" cols="30" rows="10">{{$page->body}}</textarea>
          </div>
        <div>
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
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector:'textarea.bodyfield',
    height: 300,
    menubar: false,
    plugins: ['link', 'table', 'image', 'autoresize', 'lists'],
    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bullist numlist',
    content_css: [
      '{{asset('assets/css/content.css')}}'
    ],
    images_upload_url: '{{route('imageupload')}}',
    images_upload_credentials: true,
    convert_urls: false
  });
</script>

@endsection