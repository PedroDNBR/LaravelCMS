@extends('site.layout')

@section('title', $page['title'])

@section('content')
    <div style="height: 75px; background: {{$front_config['bgcolor']}};">

    </div>
    <div class="container">
        <div class="row my-4">
            <h1>{{$page['title']}}</h1>
        </div>
        <div class="row">
            {!!$page['body']!!}
        </div>
    </div>
    
@endsection




