@extends('layouts.app')

@section('content')
<div class="container"><a href="/"><i class="bi bi-arrow-left-square-fill"></i></a></div>
<div class="container p-4">
    <div class="row g-12">
        <div class="col-md-12">
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">{{ $berita->judul }}</h2>
                <p class="blog-post-meta">{{ $berita->created_at }} by <a href="#">{{$berita->user->name}}</a></p>
                <img src="{{ asset('img/gambar/' . $berita->gambar) }}" class="mb-3 bd-placeholder-img card-img-top" alt="">
                {!! $berita->isi !!}
            </article>
        </div>
    </div>
</div>
@endsection