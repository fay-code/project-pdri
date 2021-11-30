@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3"> {{ $post->title }}</h1>

            <img src="https://source.unsplash.com/1200x400/?programming" alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
                {{ $post->body }}
            </article>

            <a href="/detail" class="d-block mt-3">Kembali ke halaman detail</a>
        </div>
    </div>
</div>
@endsection