@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                   @foreach ($posts as $post)
                   <div class="card-header">
                            <h1>{{$post->title}}</h1>
                            <p>{{$post->body}}</p>
                   </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
