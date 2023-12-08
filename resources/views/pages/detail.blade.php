@extends('layouts.app')
@section('content')
<div class="container"><a href="/"><h2><i class="bi bi-arrow-left-square-fill"></h2></i></a></div>
<div class="container p-4">
  <div class="row g-12">
    <div class="col-md-12">
      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">{{ $berita->judul }}</h2>
        <p class="blog-post-meta"> <a href="#"></a></p>
        <p class="blog-post-meta">{{ $berita->created_at->format('F j, Y') }} by <a href="#">{{$berita->user->name}}</a></p>
        <img src="{{ asset('img/gambar/' . $berita->gambar) }}" class="mb-3 bd-placeholder-img card-img-top" alt="">
        {!! $berita->isi !!}
      </article>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col 12">
      <div class="col -6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('img/gambar/' . $berita->gambar) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{ $berita->judul }}</h5>
                <p class="card-text"> Semangat Belajar</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col -6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('img/gambar/' . $berita->gambar) }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $berita->judul }}</h5>
              <p class="card-text"> Semangat Belajar </p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection