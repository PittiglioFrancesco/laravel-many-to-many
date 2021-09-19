@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dettagli prodotto</h2>
        <div class="card">
            <div class="card-header">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <h3>Category: 
                @if($post->category)
                {{$post->category->name}}
                @endif
                </h3>
                <h5 class="card-title">{{ $post->slug }}</h5>
                <p class="card-text">{{ $post->content }}</p>
            </div>
        </div>

        <div class="mt-3">
            @if($post->tags as $tag)
            <h4>Tags</h4>
            <span class="badge badge-warning"> {{$tag->name}} </span>
            @endif
        </div>

        <div class="mt-3">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Torna indietro</a>
        </div>
    </div>
@endsection